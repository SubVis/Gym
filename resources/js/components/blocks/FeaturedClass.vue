<template>
    <div class="mt-5" id="featClass">
        <div class="container">
            <p class="h1">أخر الأخبار</p>
            <hr />

            <div class="owl-carousel">
                <div
                    class="card col-sm-12 col-md-3 col-lg-4"
                    :key="index"
                    v-for="(s,index) in articles"
                >
                    <img class="card-img-top" width="50" style="height: 200px" :src="articles[index].image" />
                    <div class="card-body border">
                        <h5 class="card-title">{{ articles[index].title }}</h5>
                        <hr />
                        <p class="card-text">{{ articles[index].shortDescription }}</p>
                        <i class="fas fa-user"></i>
                        <span class="mr-2">محمد أيمن - مصر</span>
                        <br />
                        <router-link
                            :to="'/articles/'+articles[index].id"
                            class="btn btn-success mt-3"
                        >اقرأ المزيد</router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
#featClass {
    p.h1 {
        padding: 0;
    }

    text-align: right;

    .card {
        transition: all 0.4s ease;

        border-radius: 0;
        background-color: #fff;

        &:hover {
            cursor: pointer;
            box-shadow: 0 5px 20px -7px rgba(0, 0, 0, 0.9) !important;
        }
    }
}
</style>

<script>
import carousel from "vue-owl-carousel";

import Axios from "axios";
export default {
    components: {
        carousel
    },
    computed: {
        articles() {
            return this.$store.state.articles;
        }
    },
    mounted() {
        Axios.get("api/articles", {
            headers: {
                Accept: "application/json",
                Authorization: "Bearer " + this.$store.state.user.token
            }
        })
            .then(res => {
                this.$store.commit("got_articles", res.data.data);
            })
            .catch(err => {
                if (err) console.log(err);
            });

            $('.owl-carousel').owlCarousel({
                rtl: true,
                center:true,
                animateOut: 'fadeOut',
                loop: false,
                margin: 10,
                autoplay: false,
                nav: false,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    600: {
                        items: 2,
                        loop: true
                    },
                    1000: {
                        items: 2,
                        loop: true,
                    }
                }
            })
    }
};
</script>
