<template>
  <div id="app">
    <Navbar />
  </div>
</template>

<script>
import Navbar from './components/NavbarDefault.vue'

export default {
  name: 'App',
  components: {
    Navbar
  }
}
</script>

<style>
@import url('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600,700&display=swap');

#app {
  font-family: 'Montserrat', sans-serif, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.button-default {
  color: #fff;
  background-color: #DA2828;
  border: 2px solid #DA2828;
  font-size: 13px;
  font-weight: 700;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  padding: 12px 20px;
}
.button-default:focus,
.button-default.focus {
  color: #DA2828;
  background-color: transparent;
  border: 2px solid #DA2828;
}
.button-default:hover {
  color: #DA2828;
  background-color: transparent;
  border: 2px solid #DA2828;
}
.button-default:active,
.button-default.active {
  color: #DA2828;
  background-color: transparent;
  border: 2px solid #DA2828;
}
.button-default:active:hover,
.button-default.active:hover,
.button-default:active:focus,
.button-default.active:focus,
.button-default:active.focus,
.button-default.active.focus {
  color: #DA2828;
  background-color: transparent;
  border: 2px solid #DA2828;
}

</style>