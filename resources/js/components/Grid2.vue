<script>
    export default {
      props: {
        data: Array,
        columns: Array,
        filterKey: String
      },
      data() {
        return {
          sortKey: '',
          sortOrders: this.columns.reduce((o, key) => ((o[key] = 1), o), {})
        }
      },
      computed: {
        filteredData() {
          const sortKey = this.sortKey
          const filterKey = this.filterKey && this.filterKey.toLowerCase()
          const order = this.sortOrders[sortKey] || 1
          let data = this.data
          if (filterKey) {
            data = data.filter((row) => {
              return Object.keys(row).some((key) => {
                return String(row[key]).toLowerCase().indexOf(filterKey) > -1
              })
            })
          }
          if (sortKey) {
            data = data.slice().sort((a, b) => {
              a = a[sortKey]
              b = b[sortKey]
              return (a === b ? 0 : a > b ? 1 : -1) * order
            })
          }
          return data
        }
      },
      methods: {
        sortBy(key) {
          this.sortKey = key
          this.sortOrders[key] = this.sortOrders[key] * -1
        },
        capitalize(str) {
          return str.charAt(0).toUpperCase() + str.slice(1)
        }
      }
    }
    </script>
    
    <template>

            <div class="flex-grow overflow-auto">
           
      <table class="table-auto relative w-full border border-separate text-break text-sm" v-if="filteredData.length">
        <thead class="bg-blue-500 text-white">
          <tr>
            <th class="p-3" v-for="key in columns"
              @click="sortBy(key)"
              :class="{ active: sortKey == key }">
              {{ capitalize(key) }}
              <span class="arrow" :class="sortOrders[key] > 0 ? 'asc' : 'dsc'">
              </span>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr  class="bg-blue-200 lg:text-black" v-for="entry in filteredData">
            <td class="p-3 font-medium capitalize" v-for="key in columns">
            <h5>{{entry[key]}}</h5>  
            </td>
            
          </tr>
        </tbody>
      </table>
      <p v-else>No matches found.</p>
    </div>

 
    </template>
    
    <style>
        
        
        th.active {
          color: #fff;
        }
        
        th.active .arrow {
          opacity: 1;
        }
        
        .arrow {
          display: inline-block;
          vertical-align: middle;
          width: 0;
          height: 0;
          margin-left: 5px;
          opacity: 0.66;
        }
        
        .arrow.asc {
          border-left: 4px solid transparent;
          border-right: 4px solid transparent;
          border-bottom: 4px solid #fff;
        }
        
        .arrow.dsc {
          border-left: 4px solid transparent;
          border-right: 4px solid transparent;
          border-top: 4px solid #fff;
        }
        </style>