<template>
  <header class="hero">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 order-2 order-lg-1">
          <div class="content">
            <h2>Lorem ipsum sit amet dolor lorem ipsum sit amet...</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum ut.</p>
            <a href="#">Saiba mais</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Ornare ante sapien risus nulla.</h5>
            </div>
            <div class="card-body">
              <form>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
                  </div>
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                  </div>
                  <div class="form-group col-md-12">
                    <select class="form-control" name="assunto" id="assunto">
                      <option selected>Assunto</option>
                      <option value="Assunto 1">Assunto 1</option>
                      <option value="Assunto 2">Assunto 2</option>
                      <option value="Assunto 3">Assunto 3</option>
                    </select>
                  </div>
                  <div class="form-group col-md-12">
                    <textarea class="form-control" name="mensagem" id="mensagem" cols="30" rows="5" placeholder="Mensagem"></textarea>
                  </div>
                  <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-block button-default">Enviar</button>
                  </div>
                  <div class="form-group col-md-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pellentesque facilisis id pulvinar eu mi id. Euismod.</p>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  name: 'HeroBanner'
}
</script>

<style scoped>
.hero {
  width: 100%;
  min-height: 85vh;
  background-color: #fff;
  background-image: url("@/assets/hero.svg");
  background-size: cover;
  background-position: bottom;
  padding: 100px 55px;
}
.hero .content {
  max-width: 60%;
}
.hero .content h2 {
  color: #2B2626;
  font-size: 48px;
  font-weight: 600;
  margin-top: 50px;
  margin-bottom: 24px;
  padding: 0;
}
.hero .content p {
  color: #2B2626;
  font-size: 18px;
  font-weight: 400;
  margin-bottom: 24px;
}
.hero .content a {
  color: #DA2828;
  font-size: 16px;
  font-weight: 700;
}
.hero .card {
  background: #FFFFFF;
  border: 1px solid #ECECEC;
  box-shadow: 0px 10px 32px rgba(0, 0, 0, 0.16);
  border-radius: 8px;
  max-width: 459px;
  margin-left: auto;
  z-index: 1;
}
.hero .card .card-header {
  padding: 48px 50px 24px 50px;
  text-align: center;
  background-color: transparent;
  border-bottom: 0;
}
.hero .card .card-header h5.card-title  {
  color: #2B2626;
  font-size: 16px;
  font-weight: 600;
  margin: 0;
}
.hero .card .card-body {
  padding: 0 1.25rem;
}
.hero form input,
.hero form select{
  background: #FFFFFF;
  border: 1px solid #C4C4C4;
  border-radius: 8px;
  min-height: 56px;
}
.hero form textarea{
  background: #FFFFFF;
  border: 1px solid #C4C4C4;
  border-radius: 8px;
}
.hero form .button-default {
  font-size: 16px;
}
.hero form p{
  color: #898989;
  font-size: 13px;
  font-weight: 400;
  line-height: 21px;
}
</style>