<template>
  <section class="sectionOne">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="content">
            <h3>Urna bibendum posuere urna eu curabitur rhoncus.</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae cursus at bibendum mi mi turpis viverra rhoncus.</p>
            <ul>
              <li>Lorem ipsum dolor sit amet, consectetur</li>
              <li>adipiscing elit. Proin pellentesque facilisis</li>
              <li> id pulvinar eu mi id. Euismod.</li>
            </ul>
            <a class="button-default" href="#">id pulvinar eu mi id</a>
          </div>
        </div>
        <div class="col-lg-6 d-flex">
          <img src="@/assets/sectionOne.svg" alt="">
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'SectionOne'
}
</script>

<style scoped>
.sectionOne {
  padding: 72px 55px;
}
.sectionOne .content {
  max-width: 60%;
}
.sectionOne .content h3 {
  color: #2B2626;
  font-size: 32px;
  font-weight: 600;
  margin-bottom: 24px;
  padding: 0;
  line-height: 32px;
}
.sectionOne .content p {
  color: #444444;
  font-size: 16px;
  font-weight: 400;
  margin-bottom: 28px;
  line-height: 24px;
}
.sectionOne .content .button-default {
  padding: 12px 40px;
}
.sectionOne ul {
  padding: 0 0 0 4px;
  margin: 0 0 32px 0;
  list-style-type: none;
}
.sectionOne li {
  color: #2B2626;
  font-size: 15px;
  font-weight: 600;
  line-height: 18.29px;
}
.sectionOne li:before {
  content: ""; /* create pseudo-element */
  display: inline-block; /* make it an inline element */
  width: 13.68px; /* set width of bullet */
  height: 10.1px; /* set height of bullet */
  background: url("@/assets/check.svg") no-repeat;
  background-size: cover; /* cover entire space */
  margin-right: 8px; /* add spacing between bullet and text */
}
.sectionOne ul li {
  padding: 0 0 20px;
}
.sectionOne img {
  margin-left: auto;
  width: 100%;
}
@media (min-width: 1025px) and (max-width: 1280px) {
.sectionOne .content {
  max-width: 80%;
}
}
@media (min-width: 769px) and (max-width: 1024px) {
.sectionOne .content {
  max-width: 80%;
}
.sectionOne .content h3 {
  font-size: 26px;
}
.sectionOne .content p {
  font-size: 14px;
}
.sectionOne li {
  font-size: 14px;
}
}
@media (min-width: 320px) and (max-width: 480px) {
.sectionOne {
  padding: 35px 20px;
}
.sectionOne .content {
  max-width: 100%;
}
.sectionOne img {
  margin: 50px auto 0 auto;
}
}
</style>