@extends('layouts.main')
@section("main_section")

 <!--Begin::Section-->
 <div class="row">
    <div class="col-xl-8">

        <!--begin:: Widgets/Best Sellers-->
        <div class="m-portlet m-portlet--full-height ">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Best Sellers
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                        <li class="nav-item m-tabs__item">
                            <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget5_tab1_content" role="tab">
                                Last Month
                            </a>
                        </li>
                        <li class="nav-item m-tabs__item">
                            <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget5_tab2_content" role="tab">
                                last Year
                            </a>
                        </li>
                        <li class="nav-item m-tabs__item">
                            <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget5_tab3_content" role="tab">
                                All time
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body">

                <!--begin::Content-->
                <div class="tab-content">
                    <div class="tab-pane active" id="m_widget5_tab1_content" aria-expanded="true">

                        <!--begin::m-widget5-->
                        <div class="m-widget5">
                            <div class="m-widget5__item">
                                <div class="m-widget5__content">
                                    <div class="m-widget5__pic">
                                        <img class="m-widget7__img" src="assets/app/media/img//products/product6.jpg" alt="">
                                    </div>
                                    <div class="m-widget5__section">
                                        <h4 class="m-widget5__title">
                                            Great Logo Designn
                                        </h4>
                                        <span class="m-widget5__desc">
                                            Make Metronic Great Again.Lorem Ipsum Amet
                                        </span>
                                        <div class="m-widget5__info">
                                            <span class="m-widget5__author">
                                                Author:
                                            </span>
                                            <span class="m-widget5__info-label">
                                                author:
                                            </span>
                                            <span class="m-widget5__info-author-name">
                                                Fly themes
                                            </span>
                                            <span class="m-widget5__info-label">
                                                Released:
                                            </span>
                                            <span class="m-widget5__info-date m--font-info">
                                                23.08.17
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget5__content">
                                    <div class="m-widget5__stats1">
                                        <span class="m-widget5__number">19,200</span><br>
                                        <span class="m-widget5__sales">sales</span>
                                    </div>
                                    <div class="m-widget5__stats2">
                                        <span class="m-widget5__number">1046</span><br>
                                        <span class="m-widget5__votes">votes</span>
                                    </div>
                                </div>
                            </div>
                            <div class="m-widget5__item">
                                <div class="m-widget5__content">
                                    <div class="m-widget5__pic">
                                        <img class="m-widget7__img" src="assets/app/media/img//products/product10.jpg" alt="">
                                    </div>
                                    <div class="m-widget5__section">
                                        <h4 class="m-widget5__title">
                                            Branding Mockup
                                        </h4>
                                        <span class="m-widget5__desc">
                                            Make Metronic Great Again.Lorem Ipsum Amet
                                        </span>
                                        <div class="m-widget5__info">
                                            <span class="m-widget5__author">
                                                Author:
                                            </span>
                                            <span class="m-widget5__info-author m--font-info">
                                                Fly themes
                                            </span>
                                            <span class="m-widget5__info-label">
                                                Released:
                                            </span>
                                            <span class="m-widget5__info-date m--font-info">
                                                23.08.17
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget5__content">
                                    <div class="m-widget5__stats1">
                                        <span class="m-widget5__number">24,583</span><br>
                                        <span class="m-widget5__sales">sales</span>
                                    </div>
                                    <div class="m-widget5__stats2">
                                        <span class="m-widget5__number">3809</span><br>
                                        <span class="m-widget5__votes">votes</span>
                                    </div>
                                </div>
                            </div>
                            <div class="m-widget5__item">
                                <div class="m-widget5__content">
                                    <div class="m-widget5__pic">
                                        <img class="m-widget7__img" src="assets/app/media/img//products/product11.jpg" alt="">
                                    </div>
                                    <div class="m-widget5__section">
                                        <h4 class="m-widget5__title">
                                            Awesome Mobile App
                                        </h4>
                                        <span class="m-widget5__desc">
                                            Make Metronic Great Again.Lorem Ipsum Amet
                                        </span>
                                        <div class="m-widget5__info">
                                            <span class="m-widget5__author">
                                                Author:
                                            </span>
                                            <span class="m-widget5__info-author m--font-info">
                                                Fly themes
                                            </span>
                                            <span class="m-widget5__info-label">
                                                Released:
                                            </span>
                                            <span class="m-widget5__info-date m--font-info">
                                                23.08.17
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget5__content">
                                    <div class="m-widget5__stats1">
                                        <span class="m-widget5__number">10,054</span><br>
                                        <span class="m-widget5__sales">sales</span>
                                    </div>
                                    <div class="m-widget5__stats2">
                                        <span class="m-widget5__number">1103</span><br>
                                        <span class="m-widget5__votes">votes</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--end::m-widget5-->
                    </div>
                    <div class="tab-pane" id="m_widget5_tab2_content" aria-expanded="false">

                        <!--begin::m-widget5-->
                        <div class="m-widget5">
                            <div class="m-widget5__item">
                                <div class="m-widget5__content">
                                    <div class="m-widget5__pic">
                                        <img class="m-widget7__img" src="assets/app/media/img//products/product11.jpg" alt="">
                                    </div>
                                    <div class="m-widget5__section">
                                        <h4 class="m-widget5__title">
                                            Branding Mockup
                                        </h4>
                                        <span class="m-widget5__desc">
                                            Make Metronic Great Again.Lorem Ipsum Amet
                                        </span>
                                        <div class="m-widget5__info">
                                            <span class="m-widget5__author">
                                                Author:
                                            </span>
                                            <span class="m-widget5__info-author m--font-info">
                                                Fly themes
                                            </span>
                                            <span class="m-widget5__info-label">
                                                Released:
                                            </span>
                                            <span class="m-widget5__info-date m--font-info">
                                                23.08.17
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget5__content">
                                    <div class="m-widget5__stats1">
                                        <span class="m-widget5__number">24,583</span><br>
                                        <span class="m-widget5__sales">sales</span>
                                    </div>
                                    <div class="m-widget5__stats2">
                                        <span class="m-widget5__number">3809</span><br>
                                        <span class="m-widget5__votes">votes</span>
                                    </div>
                                </div>
                            </div>
                            <div class="m-widget5__item">
                                <div class="m-widget5__content">
                                    <div class="m-widget5__pic">
                                        <img class="m-widget7__img" src="assets/app/media/img//products/product6.jpg" alt="">
                                    </div>
                                    <div class="m-widget5__section">
                                        <h4 class="m-widget5__title">
                                            Great Logo Designn
                                        </h4>
                                        <span class="m-widget5__desc">
                                            Make Metronic Great Again.Lorem Ipsum Amet
                                        </span>
                                        <div class="m-widget5__info">
                                            <span class="m-widget5__author">
                                                Author:
                                            </span>
                                            <span class="m-widget5__info-author m--font-info">
                                                Fly themes
                                            </span>
                                            <span class="m-widget5__info-label">
                                                Released:
                                            </span>
                                            <span class="m-widget5__info-date m--font-info">
                                                23.08.17
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget5__content">
                                    <div class="m-widget5__stats1">
                                        <span class="m-widget5__number">19,200</span><br>
                                        <span class="m-widget5__sales">sales</span>
                                    </div>
                                    <div class="m-widget5__stats2">
                                        <span class="m-widget5__number">1046</span><br>
                                        <span class="m-widget5__votes">votes</span>
                                    </div>
                                </div>
                            </div>
                            <div class="m-widget5__item">
                                <div class="m-widget5__content">
                                    <div class="m-widget5__pic">
                                        <img class="m-widget7__img" src="assets/app/media/img//products/product10.jpg" alt="">
                                    </div>
                                    <div class="m-widget5__section">
                                        <h4 class="m-widget5__title">
                                            Awesome Mobile App
                                        </h4>
                                        <span class="m-widget5__desc">
                                            Make Metronic Great Again.Lorem Ipsum Amet
                                        </span>
                                        <div class="m-widget5__info">
                                            <span class="m-widget5__author">
                                                Author:
                                            </span>
                                            <span class="m-widget5__info-author m--font-info">
                                                Fly themes
                                            </span>
                                            <span class="m-widget5__info-label">
                                                Released:
                                            </span>
                                            <span class="m-widget5__info-date m--font-info">
                                                23.08.17
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget5__content">
                                    <div class="m-widget5__stats1">
                                        <span class="m-widget5__number">10,054</span><br>
                                        <span class="m-widget5__sales">sales</span>
                                    </div>
                                    <div class="m-widget5__stats2">
                                        <span class="m-widget5__number">1103</span><br>
                                        <span class="m-widget5__votes">votes</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--end::m-widget5-->
                    </div>
                    <div class="tab-pane" id="m_widget5_tab3_content" aria-expanded="false">

                        <!--begin::m-widget5-->
                        <div class="m-widget5">
                            <div class="m-widget5__item">
                                <div class="m-widget5__content">
                                    <div class="m-widget5__pic">
                                        <img class="m-widget7__img" src="assets/app/media/img//products/product10.jpg" alt="">
                                    </div>
                                    <div class="m-widget5__section">
                                        <h4 class="m-widget5__title">
                                            Branding Mockup
                                        </h4>
                                        <span class="m-widget5__desc">
                                            Make Metronic Great Again.Lorem Ipsum Amet
                                        </span>
                                        <div class="m-widget5__info">
                                            <span class="m-widget5__author">
                                                Author:
                                            </span>
                                            <span class="m-widget5__info-author m--font-info">
                                                Fly themes
                                            </span>
                                            <span class="m-widget5__info-label">
                                                Released:
                                            </span>
                                            <span class="m-widget5__info-date m--font-info">
                                                23.08.17
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget5__content">
                                    <div class="m-widget5__stats1">
                                        <span class="m-widget5__number">10.054</span><br>
                                        <span class="m-widget5__sales">sales</span>
                                    </div>
                                    <div class="m-widget5__stats2">
                                        <span class="m-widget5__number">1103</span><br>
                                        <span class="m-widget5__votes">votes</span>
                                    </div>
                                </div>
                            </div>
                            <div class="m-widget5__item">
                                <div class="m-widget5__content">
                                    <div class="m-widget5__pic">
                                        <img class="m-widget7__img" src="assets/app/media/img//products/product11.jpg" alt="">
                                    </div>
                                    <div class="m-widget5__section">
                                        <h4 class="m-widget5__title">
                                            Great Logo Designn
                                        </h4>
                                        <span class="m-widget5__desc">
                                            Make Metronic Great Again.Lorem Ipsum Amet
                                        </span>
                                        <div class="m-widget5__info">
                                            <span class="m-widget5__author">
                                                Author:
                                            </span>
                                            <span class="m-widget5__info-author m--font-info">
                                                Fly themes
                                            </span>
                                            <span class="m-widget5__info-label">
                                                Released:
                                            </span>
                                            <span class="m-widget5__info-date m--font-info">
                                                23.08.17
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget5__content">
                                    <div class="m-widget5__stats1">
                                        <span class="m-widget5__number">24,583</span><br>
                                        <span class="m-widget5__sales">sales</span>
                                    </div>
                                    <div class="m-widget5__stats2">
                                        <span class="m-widget5__number">3809</span><br>
                                        <span class="m-widget5__votes">votes</span>
                                    </div>
                                </div>
                            </div>
                            <div class="m-widget5__item">
                                <div class="m-widget5__content">
                                    <div class="m-widget5__pic">
                                        <img class="m-widget7__img" src="assets/app/media/img//products/product6.jpg" alt="">
                                    </div>
                                    <div class="m-widget5__section">
                                        <h4 class="m-widget5__title">
                                            Awesome Mobile App
                                        </h4>
                                        <span class="m-widget5__desc">
                                            Make Metronic Great Again.Lorem Ipsum Amet
                                        </span>
                                        <div class="m-widget5__info">
                                            <span class="m-widget5__author">
                                                Author:
                                            </span>
                                            <span class="m-widget5__info-author m--font-info">
                                                Fly themes
                                            </span>
                                            <span class="m-widget5__info-label">
                                                Released:
                                            </span>
                                            <span class="m-widget5__info-date m--font-info">
                                                23.08.17
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget5__content">
                                    <div class="m-widget5__stats1">
                                        <span class="m-widget5__number">19,200</span><br>
                                        <span class="m-widget5__sales">1046</span>
                                    </div>
                                    <div class="m-widget5__stats2">
                                        <span class="m-widget5__number">1046</span><br>
                                        <span class="m-widget5__votes">votes</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--end::m-widget5-->
                    </div>
                </div>

                <!--end::Content-->
            </div>
        </div>

        <!--end:: Widgets/Best Sellers-->
    </div>
    <div class="col-xl-4">

        <!--begin:: Widgets/Authors Profit-->
        <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height ">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Authors Profit
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
                            <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                All
                            </a>
                            <div class="m-dropdown__wrapper">
                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                <div class="m-dropdown__inner">
                                    <div class="m-dropdown__body">
                                        <div class="m-dropdown__content">
                                            <ul class="m-nav">
                                                <li class="m-nav__section m-nav__section--first">
                                                    <span class="m-nav__section-text">Quick Actions</span>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                        <span class="m-nav__link-text">Activity</span>
                                                    </a>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                        <span class="m-nav__link-text">Messages</span>
                                                    </a>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-info"></i>
                                                        <span class="m-nav__link-text">FAQ</span>
                                                    </a>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                        <span class="m-nav__link-text">Support</span>
                                                    </a>
                                                </li>
                                                <li class="m-nav__separator m-nav__separator--fit">
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body">
                <div class="m-widget4">
                    <div class="m-widget4__item">
                        <div class="m-widget4__img m-widget4__img--logo">
                            <img src="assets/app/media/img/client-logos/logo5.png" alt="">
                        </div>
                        <div class="m-widget4__info">
                            <span class="m-widget4__title">
                                Trump Themes
                            </span><br>
                            <span class="m-widget4__sub">
                                Make Metronic Great Again
                            </span>
                        </div>
                        <span class="m-widget4__ext">
                            <span class="m-widget4__number m--font-brand">+$2500</span>
                        </span>
                    </div>
                    <div class="m-widget4__item">
                        <div class="m-widget4__img m-widget4__img--logo">
                            <img src="assets/app/media/img/client-logos/logo4.png" alt="">
                        </div>
                        <div class="m-widget4__info">
                            <span class="m-widget4__title">
                                StarBucks
                            </span><br>
                            <span class="m-widget4__sub">
                                Good Coffee & Snacks
                            </span>
                        </div>
                        <span class="m-widget4__ext">
                            <span class="m-widget4__number m--font-brand">-$290</span>
                        </span>
                    </div>
                    <div class="m-widget4__item">
                        <div class="m-widget4__img m-widget4__img--logo">
                            <img src="assets/app/media/img/client-logos/logo3.png" alt="">
                        </div>
                        <div class="m-widget4__info">
                            <span class="m-widget4__title">
                                Phyton
                            </span><br>
                            <span class="m-widget4__sub">
                                A Programming Language
                            </span>
                        </div>
                        <span class="m-widget4__ext">
                            <span class="m-widget4__number m--font-brand">+$17</span>
                        </span>
                    </div>
                    <div class="m-widget4__item">
                        <div class="m-widget4__img m-widget4__img--logo">
                            <img src="assets/app/media/img/client-logos/logo2.png" alt="">
                        </div>
                        <div class="m-widget4__info">
                            <span class="m-widget4__title">
                                GreenMakers
                            </span><br>
                            <span class="m-widget4__sub">
                                Make Green Great Again
                            </span>
                        </div>
                        <span class="m-widget4__ext">
                            <span class="m-widget4__number m--font-brand">-$2.50</span>
                        </span>
                    </div>
                    <div class="m-widget4__item">
                        <div class="m-widget4__img m-widget4__img--logo">
                            <img src="assets/app/media/img/client-logos/logo1.png" alt="">
                        </div>
                        <div class="m-widget4__info">
                            <span class="m-widget4__title">
                                FlyThemes
                            </span><br>
                            <span class="m-widget4__sub">
                                A Let's Fly Fast Again Language
                            </span>
                        </div>
                        <span class="m-widget4__ext">
                            <span class="m-widget4__number m--font-brand">+$200</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!--end:: Widgets/Authors Profit-->
    </div>
</div>

@endsection


@section("subheader")
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title ">Dashboard</h3>
            <a class="btn btn-outline dark" data-target="#full-width" data-toggle="modal"> View Demo </a>
        </div>
        <div>
            <span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
                <span class="m-subheader__daterange-label">
                    <span class="m-subheader__daterange-title"></span>
                    <span class="m-subheader__daterange-date m--font-brand"></span>
                </span>
                <a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
                    <i class="la la-angle-down"></i>
                </a>
            </span>
        </div>
    </div>
</div>
@endsection