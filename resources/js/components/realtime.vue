<template>
<head>
  <title>Pusher Test</title>
</head>

  <h1>Pusher Test</h1>
  <p>
    Publish an event to channel <code>my-channel</code>
    with event name <code>my-event</code>; it will appear below:
  </p>

    <ul>
      <li v-for="message in messages">
        {{message}}
      </li>
    </ul>

</template>
  
  <script>
  export default {
    data (){
          return {
            message: [] ,
          }
      },
 
      
          methods: {
    refreshSlider() {
      const pusher = new Pusher('1094b54203db3804054a', {
        cluster: "ap1",
      });
      Pusher.logToConsole = true;
      const channel = pusher.subscribe("my-channel");
     channel.bind("my-event", (data) => {
        this.message = data ;
});
  
    },
  },
async mounted() {

    this.refreshSlider();
  },
  
        }
  </script>
