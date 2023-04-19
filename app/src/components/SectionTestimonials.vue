<template>
  <section class="testimonials">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="content">
            <p class="name">Depoimentos</p>
            <h4>Congue viverra quam dui.</h4>
            <p class="subtext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est nunc.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card">
            <div class="card-header">
              <svg width="48" height="38" viewBox="0 0 48 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 15.6574V5.27778C0 1.75926 1.58824 0 4.76471 0H14.6471C17.8235 0 19.4118 1.75926 19.4118 5.27778V22.6944C19.4118 26.0957 18.7647 28.9691 17.4706 31.3148C16.1765 33.5432 14.6471 35.0679 12.8824 35.8889C9.82353 37.2963 7.47059 38 5.82353 38H2.82353L0.882351 37.6482V31.4907H1.23529C5 31.4907 6.88235 29.4383 6.88235 25.3333V20.5833H4.76471C1.58824 20.5833 0 18.9414 0 15.6574ZM28.5882 15.6574V5.27778C28.5882 1.75926 30.2353 0 33.5294 0H43.4118C46.4706 0 48 1.75926 48 5.27778V22.6944C48 26.0957 47.3529 28.9691 46.0588 31.3148C44.8824 33.5432 43.3529 35.0679 41.4706 35.8889C38.4118 37.2963 36.0588 38 34.4118 38H31.5882L29.6471 37.6482V31.4907H30C33.7647 31.4907 35.6471 29.4383 35.6471 25.3333V20.5833H33.5294C30.2353 20.5833 28.5882 18.9414 28.5882 15.6574Z" fill="#DA2828"/>
              </svg>
            </div>
            <div class="card-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sem purus bibendum rhoncus ut tortor etiam turpis. Vitae varius nunc, pulvinar elementum. Sed sit euismod dui id velit eu amet accumsan blandit. Posuere ac sed gravida nibh tristique elit volutpat ac. Vulputate mauris hac eget ipsum. In id gravida laoreet in aliquet. </p>
            </div>
            <div class="card-footer">
              <img src="@/assets/thiago-franca.jpg" alt="Thiago França">
              <h6>Thiago França</h6>
              <span>Jac J3 2013</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'SectionTestimonials'
}
</script>

<style scoped>
.testimonials {
  padding: 72px 55px;
  background: url("@/assets/testimonials-bg.svg") no-repeat;
  background-size: contain;
  background-position: center bottom;
}
.testimonials .content {
  text-align: center;
}
.testimonials .content p.name {
  color: #DA2828;
  font-size: 12px;
  font-weight: 500;
  margin-bottom: 8px;
  line-height: 14.63px;
  text-transform: uppercase;
}
.testimonials .content h4 {
  color: #2B2626;
  font-size: 48px;
  font-weight: 600;
  margin-bottom: 8px;
  padding: 0;
  line-height: 58.51px;
}
.testimonials .content p.subtext {
  color: #444444;
  font-size: 16px;
  font-weight: 400;
  margin-bottom: 27px;
  line-height: 24px;
}
.testimonials .card {
  background: #FFFFFF;
  border: 1px solid #ECECEC;
  box-shadow: 0px 10px 32px rgba(0, 0, 0, 0.16);
  border-radius: 8px;
  margin-left: auto;
  z-index: 1;
}
.testimonials .card .card-header {
  padding: 40px 156px 32px 156px;
  text-align: center;
  background-color: transparent;
  border-bottom: 0;
}
.testimonials .card .card-body {
  padding: 0 24px;
  text-align: center;
}
.testimonials .card .card-body p {
  padding: 0;
  margin: 0;
}
.testimonials .card .card-footer {
  padding: 48px 50px 24px 50px;
  text-align: center;
  background-color: transparent;
  border: 0;
}
.testimonials .card .card-footer img {
  max-width: 54px;
  max-height: 54px;
  border-radius: 100%;
  margin-bottom: 8px;
}
.testimonials .card .card-footer h6 {
  color: #2B2626;
  font-size: 12px;
  font-weight: 600;
  margin: 2px 0 0 0;
  line-height: 14.63px;
}
.testimonials .card .card-footer span {
  color: #2B2626;
  font-size: 12px;
  font-weight: 400;
  line-height: 14.63px;
}
</style>