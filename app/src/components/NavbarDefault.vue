<template>
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#">Teste front</a>
    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Como funciona</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Vantagens</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Depoimentos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Dúvidas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link phone" href="#"><i class="fa fa-phone" aria-hidden="true"></i> 99 9999-9999</a>
        </li>
        <li class="nav-item">
          <a class="button-default" href="#">Lorem ipsum</a>
        </li>
      </ul>
    </div>
  </nav>
</template>

<script>
export default {
  name: 'NavbarDefault'
}
</script>

<style scoped>
.navbar{
  padding: 0 70px;
  min-height: 72px;
  box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.4);
}
.navbar .navbar-brand{
  color: #2B2626;
  text-transform: uppercase;
  font-weight: 700;
}
ul.navbar-nav {
  display: flex;
  align-items: center;
}
.navbar li {
  margin: 0 0 0 15px;
}
.navbar ul li a{
  color: #2B2626;
  font-size: 13px;
  font-weight: 600;
  position: relative;
  white-space: nowrap;
  text-decoration: none;
  transition: .125s color ease-in-out, .125s opacity ease-in-out,.125s border ease-in-out;
}
.navbar ul li a.phone{
  display: flex;
  align-items: center;
  font-size: 16px;
  font-weight: 400;
}
.navbar ul li a.phone i{
  color: transparent;
  padding-right: 10px;
   -webkit-text-stroke-width: 1px;
   -webkit-text-stroke-color: #2B2626;
}
.navbar ul li a:hover{
  color: #DA2828 !important;
}
.navbar ul li a.button-default {
  color: #fff;
}
@media (min-width: 320px) and (max-width: 480px) {
.navbar {
  padding: 10px 20px;
}
.custom-toggler .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(218, 40, 40, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
}
.custom-toggler.navbar-toggler {
  border-color: #DA2828;
} 
ul.navbar-nav {
  align-items: flex-start;
}
.navbar li {
  margin: 0;
}
.navbar ul li a.phone{
  display: none;
}
.navbar ul li a.button-default {
  display: none;
}
}
</style>