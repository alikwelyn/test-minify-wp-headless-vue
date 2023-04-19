<template>
  <footer>
    <div class="container-fluid mb-2">
      <div class="row">
        <div class="col-lg-4">
          <h4 class="brand">Teste front</h4>
        </div>
        <div class="col-lg-4 text-center">
          <h4 class="text">Lorem ipsum sit amet</h4>
        </div>
        <div class="col-lg-4">
          <div class="phone-info">
            <span>Fale conosco</span>
            <h4 class="phone">99 9999-9999</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid copyright">
      <div class="row d-flex align-items-center">
        <div class="col-lg-4">
          <h6>Teste front @ 2020 | Todos os direitos reservados</h6>
        </div>
        <div class="col-lg-4">
          <div class="social-links">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="links">
            <h6>Política de privacidade | Termos de uso</h6>
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: 'FooterDefault'
}
</script>

<style scoped>
footer {
  background-color: #2B2626;
  padding: 40px;
}
footer h4.brand {
  color: #fff;
  text-transform: uppercase;
  font-size: 22px;
  font-weight: 700;
  line-height: 26.82px;
}
footer h4.text {
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  line-height: 21.94px;
}
footer .phone-info{
  text-align: right;
}
footer .phone-info span {
  color: #898989;
  font-size: 12px;
  font-weight: 600;
  line-height: 14.63px;
  margin-left: auto;
}
footer .phone-info h4.phone {
  color: #fff;
  font-size: 16px;
  font-weight: 400;
  line-height: 19.5px;
  margin-left: auto;
}
footer .copyright {
  padding-top: 30px;
  border-top: 1px solid rgba(255, 255, 255, 0.1);
}
footer .copyright h6{
  color: #898989;
  font-size: 12px;
  font-weight: 400;
  line-height: 14.63px;
  margin-left: auto;
}
footer .copyright .social-links {
  display: flex;
  justify-content: center;
}
footer .copyright .social-links a {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  font-size: 16px;
  color: rgba(255, 255, 255, 0.7);
  margin-right: 20px;
  transition: 0.3s;
}
footer .copyright .social-links a:hover {
  color: #fff;
  border-color: #fff;
}
footer .copyright .links{
  text-align: right;
}
</style>