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
        <div class="col-lg-12">
            <div ref="swiper" class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" v-for="testimonial in testimonials" :key="testimonial.id">
                        <div class="card">
                            <div class="card-header"></div>
                            <div class="card-body">
                                <p>{{ testimonial.text }}</p>
                            </div>
                            <div class="card-footer">
                                <img :src="testimonial.image" alt="Thiago França">
                                <h6>{{ testimonial.author }}</h6>
                                <span>{{ testimonial.car }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import axios from 'axios';
import Swiper, { Pagination } from 'swiper'
import 'swiper/swiper-bundle.min.css'


export default {
    name: 'SectionTestimonials',
    data() {
        return {
        testimonials: [],
        activeIndex: 0
        }
    },
    mounted() {
        axios.get(`${process.env.VUE_APP_API_URL}/depoimentos?orderby=date&order=asc`)
        .then(response => {
            const testimonialRequests = response.data.map(testimonial => {
                const mediaUrl = `${process.env.VUE_APP_API_URL}/media/${testimonial.featured_media}`;

                return axios.get(mediaUrl)
                    .then(mediaResponse => {
                        return {
                            id: testimonial.id,
                            text: testimonial.content.rendered.replace(/<\/?p>/g, ''),
                            image: mediaResponse.data.source_url,
                            author: testimonial.title.rendered,
                            car: testimonial.acf.carro
                        };
                    });
            });

            Promise.all(testimonialRequests)
                .then(testimonials => {
                    this.testimonials = testimonials;
                })
                .then(() => {
                    new Swiper(this.$refs.swiper, {
                        modules: [Pagination],
                        lazy: true,
                        spaceBetween: 29,
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                        breakpoints: {
                            480: {
                                slidesPerView: 1
                            },
                            768: {
                                slidesPerView: 2,
                            },
                            1024: {
                                slidesPerView: 3,
                            }
                        },
                        on: {
                            slideChange: (swiper) => {
                                this.activeIndex = swiper.realIndex
                            },
                        },
                    });
                });
        })
        .catch(error => {
            console.error(error);
        });
    },
}
</script>

<style scoped>
.testimonials {
  padding: 72px 55px 156px 55px;
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
.testimonials .swiper {
  width: 100%;
  height: 550px;
}
.testimonials .swiper-slide {
  display: flex;
  justify-content: center;
  align-items: center;
}
.testimonials .swiper-pagination.swiper-pagination-clickable.swiper-pagination-bullets.swiper-pagination-horizontal {
    bottom: -50px;
}
.testimonials .card {
  background: #FFFFFF;
  border: 1px solid #ECECEC;
  box-shadow: 0px 10px 32px rgba(0, 0, 0, 0.16);
  border-radius: 8px;
  min-height: 466px;
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

@media (min-width: 1025px) and (max-width: 1280px) {
.testimonials .swiper {
  height: 580px;
}
.testimonials .card {
  min-height: 500px;
}
}
@media (min-width: 769px) and (max-width: 1024px) {
.testimonials .swiper {
  height: 680px;
}
.testimonials .card {
  min-height: 600px;
}
}
@media (min-width: 320px) and (max-width: 480px) {
.testimonials {
    padding: 35px 20px 156px 20px;
}
.testimonials .content h4 {
    font-size: 34px;
    line-height: 34px;
}
.testimonials .swiper {
    width: 100%;
    height: 580px;
}
.testimonials .card {
    box-shadow: 0px 10px 32px rgba(0, 0, 0, 0);
    min-height: 520px;
}
}
</style>