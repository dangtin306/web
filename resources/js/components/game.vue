<template>
    <div class="layout">
      <div>
        <h1>
          <span
            :class="{ light: light === index }"
            v-for="(char, index) in title"
            :key="index"
          >{{ char }}</span>
          <br>
          <span
            :class="{ light: light === index }"
            v-for="(char, index) in title2"
            :key="index"
          >{{ char }}</span>
        </h1>
        <div class="slot-machine" style="width:100%"  >
          <div class="slot" v-for="item in slots.length" :key="item">
            <ul>
              <li v-for="(color, i) in colors" :key="color + i" :style="{ backgroundColor: color }">
                <span>{{ i }}</span>
              </li>
              <li v-for="(color, i) in colors" :key="i + color" :style="{ backgroundColor: color }">
                <span>{{ i }}</span>
              </li>
            </ul>
          </div>
        </div>
        Số xu chơi <br>
        

    <input type="radio" class="btn-check" value="10" v-model="picked" id="10" autocomplete="off">
    <label class="btn btn-outline-danger" for="10">10. xu</label>

    <input type="radio" class="btn-check" value="20" v-model="picked" id="20" autocomplete="off">
    <label class="btn btn-outline-danger" for="20">20 xu</label>
    <input type="radio" class="btn-check" value="50" v-model="picked" id="50" autocomplete="off">
    <label class="btn btn-outline-danger" for="50">50 xu</label>

    <input type="radio" class="btn-check" value="100" v-model="picked" id="100" autocomplete="off">
    <label class="btn btn-outline-danger" for="100">100 xu</label>


<input type="radio" class="btn-check" value="500" v-model="picked" id="500" autocomplete="off">
<label class="btn btn-outline-danger" for="500">500 xu</label>

<input type="radio" class="btn-check" value="1000" v-model="picked" id="1000" autocomplete="off">
<label class="btn btn-outline-danger" for="1000">1000 xu</label>


<input type="radio" class="btn-check" value="5000" v-model="picked" id="5000" autocomplete="off">
<label class="btn btn-outline-danger" for="5000">5000 xu</label>

<br><br>
<p>Trò chơi trong app không phài là game cờ bạc , game tạo ra nhằm mục đích giữ chân người dùng , khiến app thú vị hơn và được viết trên ngôn ngữ game html5 </p>
        <button class="btn btn-primary" @click="play">chơi ngay</button>
        <Adsense
        data-ad-client="ca-pub-4574266110812955"
         data-ad-slot="1627514116"
         data-full-width-responsive="yes"
         data-ad-format="horizontal"
         >
      </Adsense>
        <p v-if="error2">{{ error2 }}</p>
        <p v-if="show">{{ show }}</p>
      </div>
      <div>
        <!-- <div class="options">
          <el-radio-group v-model="mode">
            <el-radio :label="1">Random</el-radio>
            <el-radio :label="2">Winning</el-radio>
            <el-radio :label="3">Failure</el-radio>
            <el-radio :label="4">Specified</el-radio>
          </el-radio-group>
          <el-select v-if="mode === 2" class="select" v-model="win" placeholder="Please select">
            <el-option label="Random" :value="''"></el-option>
            <el-option
              v-for="(item, index) in colors.length"
              :key="index"
              :label="index"
              :value="index"
            ></el-option>
          </el-select>
          <template v-if="mode === 4">
            <el-select
              v-for="(item, index) in specified"
              :key="index"
              class="select"
              v-model="specified[index]"
              placeholder="Please select"
            >
              <el-option
                v-for="(item, index) in colors.length"
                :key="index"
                :label="index"
                :value="index"
              ></el-option>
            </el-select>
          </template>
        </div> -->
      </div>
    </div>
  </template>
  
  <script>
  import { Tween, Easing, autoPlay } from "es6-tween";
  
  autoPlay(true);
  
  export default {
    data() {
      return {
        title: "3 số giống nhau bạn được nhận x7 xu".split(""),
        title2: "3 số tăng dần x2 xu".split(""),
        light: 0,
        picked: 'One',
        timer: 0,
        error2: '',
        mode: 1,
        moder: 1,
        show: '' ,
        ok2 : this.$cookies.get("apikey") ,
        unitHeight: 0,
        results: [0, 0, 0],
        win: "",
        specified: [1, 2, 3],
        specified1: [1, 2, 3],
        specified2: [2, 3, 4],
        specified3: [3, 4, 5],
        specified4: [4, 5, 6],
        specified5: [7, 8, 9],
        specified6: [5, 6, 7],
        specified7: [6, 7, 8],
        slots: [
          {
            running: false,
            el: null,
            count: 0,
            index: 0
          },
          {
            running: false,
            el: null,
            count: 0,
            index: 0
          },
          {
            running: false,
            el: null,
            count: 0,
            index: 0
          }
        ],
        colors: [
          "#f44336",
          "#9c27b0",
          "#3f51b5",
          "#2196f3",
          "#00bcd4",
          "#4caf50",
          "#ff9800",
          "#ff5722",
          "#795548"
        ],
        speed: 1.333333,
        delay: 800,
        duration: 1500,
        durationCount: 5
      };
    },
    computed: {
      isRunning() {
        
        return this.slots.some(item => item.running);
      }
      
    },
    
    watch: {
      isRunning(value) {
        if (!value) {
          this.showResult();
        }
        this.lightTitle(value ? 150 : 800);
        
      }
      
    },
    mounted() {
      const ul = document.querySelectorAll(".slot ul");
      Array.prototype.forEach.call(ul, (el, index) => {
        this.slots[index].el = el;
      });
      this.unitHeight = ul[0].clientHeight / (this.colors.length * 2);
      this.lightTitle();
      
    },
    beforeDestroy() {
      clearInterval(this.timer);
    },
    methods: {
        
      lightTitle(interval = 800) {

        clearInterval(this.timer);
        this.timer = setInterval(() => {
          this.light =
            (this.title[this.light + 1] === " "
              ? this.light + 2
              : this.light + 1) % this.title.length;
        }, interval);
      },
      play() {
if ( this.picked === 'One' )
{
    this.error2 = 'vui lòng chọn số xu chơi'
}
else 
{

}
        axios
       .post('./random', {
        key: this.ok2 ,
        picked: this.picked ,
    money: this.age
  })
  .then(response => (this.info = response.data ,
  this.play2(),
    console.log( this.info ) ,
    this.moder = this.info.status ,
    console.log( this.moder ) ,
      this.play2()
  ))
  .catch(error => console.log(error) 

     
    //   console.log( this.info )  ,
   
      )


    
        
      },
      
      play2(){
        this.results = this.generateResults(this.mode);
        console.log( this.results );

        if (!this.isRunning) {
          for (let i = 0; i < this.slots.length; i++) {
            this.slots[i].running = true;
            this.speedUp(
              this.slots[i].el,
              i,
              this.slots[i].index * this.unitHeight
            );
          }
        }
      },
      speedUp(el, index, from = 0) {
        
        new Tween({ y: from })
          .delay(index * this.delay)
          .to({ y: from + this.unitHeight * this.durationCount }, this.duration)
          .easing(Easing.Quadratic.In)
          .on("update", ({ y }, progress, timing) => {
            el.style.transform = `translateY(-${y}px)`;
          })
          .on("complete", ({ y }) => {
            let from = y;
            if (y >= this.unitHeight * this.colors.length) {
              from = y - this.unitHeight * this.colors.length;
              el.style.transform = `translateY(-${from}px)`;
            }
            new Tween({ y: from })
              .to(
                { y: this.unitHeight * this.colors.length },
                (this.unitHeight * this.colors.length - from) / this.speed
              )
              .easing(Easing.Linear)
              .on("update", ({ y }, progress, timing) => {
                el.style.transform = `translateY(-${y}px)`;
              })
              .on("complete", ({ y }) => {
                el.style.transform = `translateY(0px)`;
                this.speedKeep(el, index);
              })
              .start();
          })
          .start();
      },
      speedKeep(el, index, to = this.unitHeight * this.colors.length) {
        
        new Tween({ y: 0 })
          .to({ y: to }, to / this.speed)
          .easing(Easing.Linear)
          .on("update", ({ y }, progress, timing) => {
            el.style.transform = `translateY(-${y}px)`;
          })
          .on("complete", ({ y }) => {
            this.slots[index].count += 1;
            if (this.slots[index].count >= 2) {
              this.slots[index].count = 0;
              this.speedDown(
                el,
                index,
                this.unitHeight *
                  (this.colors.length + this.results[index] - this.durationCount)
              );
            } else if (this.slots[index].count === 1) {
              this.speedKeep(
                el,
                index,
                this.unitHeight *
                  (this.colors.length + this.results[index] - this.durationCount)
              );
            } else {
              el.style.transform = `translateY(0px)`;
              this.speedKeep(el, index);
            }
          })
          .start();
      },
      speedDown(el, index, from = 0) {
        new Tween({ y: from })
          .to(
            { y: this.unitHeight * (this.colors.length + this.results[index]) },
            this.duration
          )
          .easing(Easing.Quadratic.Out)
          .on("update", ({ y }, progress, timing) => {
            el.style.transform = `translateY(-${y}px)`;
          })
          .on("complete", ({ y }) => {
            this.slots[index].running = false;
            this.slots[index].index = this.results[index];
            this.$set(this.slots, index, this.slots[index]);
          })
          .start();
      },
      
      generateResults(mode = 1) {
     
        mode = this.moder ;
        if (mode === 2) {
          return (this.win !== ""
            ? this.win
            : Math.floor(Math.random() * this.colors.length)
          )
            .toString()
            .repeat(3)
            .split("")
            .map(item => item * 1);
        }
        else   if (mode === 4) {
          return [...this.specified];
        }
        else  if (mode === 5) {
            return [...this.specified1];
        }
        else  if (mode === 6) {
            return [...this.specified2];
        }
        else   if (mode === 7) {
            return [...this.specified3];
        }
        else  if (mode === 8) {
            return [...this.specified4];
        }
        else if (mode === 9) {
            return [...this.specified5];
        }
        else if (mode === 10) {
            return [...this.specified6];
        }
       else if (mode === 11) {
            return [...this.specified7];
        }



        else
        {
          const results = this.results.map(() =>
          Math.floor(Math.random() * this.colors.length),
         
        );
        // if (mode === 3 && results.every(item => item === results[0])) {
        //   const excluded = this.colors.map((item, index) => index);
        //   excluded.splice(results[0], 1);
        //   results[Math.floor(Math.random() * results.length)] =
        //     excluded[Math.floor(Math.random() * excluded.length)];
        // }
        console.log( results ) ;
        const arrayy =  JSON.stringify(results);
        const somot = arrayy.charAt(1);
        const sohai = arrayy.charAt(3);
        const soba = arrayy.charAt(5);
if (somot == sohai &&  sohai == soba)
{
  const results = this.results.map(() =>
          Math.floor(Math.random() * this.colors.length),
         
        );
        return results;

}
else
{
  return results;

}
 

        }
     
       
      },
      showResult() {
        if (this.results.every(item => item === this.results[0])) {
            this.show = this.info.message +' số xu hiện tại ' +  this.info.result ,  
            this.error2 = '' 
        } else {
            this.show = this.info.message +' số xu hiện tại ' +  this.info.result  ,
            this.error2 = '' 
        }
      }
    }
  };
  </script>
  
  <style lang="less">
  body {
    --slot-size: 120px;
  }
  .layout {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    max-width: 900px;
    margin: 0 auto;
  }
  @media only screen and (max-width: 900px) {
    .layout {
      grid-template-columns: repeat(1, 1fr);
    }
  }
  h1 {
    font-weight: normal;
    font-size: 36px;
  }
  .light {
    color: #f44336;
    text-shadow: 0 1px 6px rgba(239, 83, 80, 0.8);
  }
  .slot-machine {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 5px;
    width: ~"calc(var(--slot-size) * 3 + 10px)";
    height: var(--slot-size);
    margin: 0 auto;
    padding: 5px;
    background: #000;
  }
  .slot {
    position: relative;
    height: 100%;
    overflow: hidden;
    ul {
      position: absolute;
      width: 100%;
      padding: 0;
      margin: 0;
      transform: translateY(0);
    }
    li {
      display: flex;
      align-items: center;
      justify-content: center;
      list-style: none;
      height: var(--slot-size);
      font-size: 72px;
      color: #fff;
    }
  }
  .options {
    box-sizing: border-box;
    width: ~"calc(var(--slot-size) * 3 + 20px)";
    min-height: 200px;
    margin: 30px auto 0;
    padding: 16px;
    text-align: left;
    border-radius: 8px;
    border: 1px solid #ddd;
  }
  .select {
    margin: 8px 0;
  }
  .el-radio {
    margin-right: 15px;
  }
  .play {
    font-size: 36px;
    padding: 8px 16px;
    margin-top: 40px;
  }
  </style>
  