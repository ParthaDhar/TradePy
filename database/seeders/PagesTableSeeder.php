<?php

namespace Database\Seeders;

use App\Models\Core\Page;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = now();

        $pages = [
            [
                'id' => 1,
                'slug' => 'terms-and-conditions',
                'title' => 'Terms And Conditions',
                'body' => '<section class="cmb_section" data-cmb-wrapper="cmb_section" data-cmb-id="5" data-cmb-element-type="static-layout"><div class="section-overlay"><div class="cmb_container container" data-cmb-wrapper="cmb_container" data-cmb-id="1"><div class="cmb_row row" data-cmb-wrapper="cmb_row" data-cmb-id="2"><div class="cmb_column col-sm-12" data-cmb-wrapper="cmb_column" data-cmb-id="3"><div class="cmb_editable_text" data-cmb-wrapper="cmb_editable_text" data-cmb-id="4"><div class="cmb-editable-text"><div class="cmb-editable-text-container" data-cmb-lang-id="1"></div></div></div></div></div></div></div></section>',
                'published_at' => '2020-11-03 07:09:21',
                'settings' => '{
                    "top_nav": "0",
                    "side_nav": "0",
                    "side_nav_fixed": "0",
                    "hide_breadcrumb": "0",
                    "navigation_type": "0",
                    "top_nav_transparent": "0",
                    "logo_inversed_top_nav": "0",
                    "logo_inversed_side_nav": "0"
                }',
                'is_home_page' => INACTIVE,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 2,
                'slug' => 'home',
                'title' => 'Home',
                'body' => '<section class="cmb_section background-size-cover" data-cmb-wrapper="cmb_section" data-cmb-id="1" data-cmb-element-type="static-layout"><div class="section-overlay"><div class="cmb_container container-fluid" data-cmb-wrapper="cmb_container" data-cmb-element-type="static-layout" data-cmb-id="2"><div class="cmb_row row" data-cmb-wrapper="cmb_row" data-cmb-element-type="static-layout" data-cmb-id="3"><div class="cmb_column col-sm-12" data-cmb-wrapper="cmb_column" data-cmb-id="4" data-cmb-element-type="static-layout"></div></div></div><div class="cmb_container container" data-cmb-wrapper="cmb_container" data-cmb-id="5" data-cmb-element-type="static-layout"><div class="cmb_row row" data-cmb-wrapper="cmb_row" data-cmb-element-type="static-layout" data-cmb-id="7"><div class="cmb_column com-sm-7 col-md-7" data-cmb-wrapper="cmb_column" data-cmb-element-type="static-layout" data-cmb-id="11"><div class="cmb_editable_text" data-cmb-wrapper="cmb_editable_text" data-cmb-element-type="static-layout" data-cmb-id="12"><div class="cmb-editable-text"><div class="cmb-editable-text-container" data-cmb-lang-id="48"></div></div></div><a class="cmb_button btn cmb-element btn-light btn-lg font-size-18 mt-5" href="#" data-cmb-wrapper="cmb_button" data-cmb-id="6" data-cmb-element-type="static-layout" data-cmb-classes="font-size-18"><span class="cmb-single-line-editable-text" data-cmb-lang-id="1"></span></a><a class="cmb_button btn cmb-element ml-2 btn-lg btn-danger font-size-18 mt-5" href="#" data-cmb-wrapper="cmb_button" data-cmb-id="8" data-cmb-element-type="static-layout" data-cmb-classes="font-size-18"><span class="cmb-single-line-editable-text" data-cmb-lang-id="2"></span></a></div></div></div></div></section><section class="cmb_section" data-cmb-wrapper="cmb_section" data-cmb-id="42" data-cmb-element-type="static-layout"><div class="section-overlay"><div class="cmb_container container" data-cmb-wrapper="cmb_container" data-cmb-element-type="static-layout" data-cmb-id="58"><div class="cmb_row row" data-cmb-wrapper="cmb_row" data-cmb-element-type="static-layout" data-cmb-id="59"><div class="cmb_column col-sm-12" data-cmb-wrapper="cmb_column" data-cmb-element-type="static-layout" data-cmb-id="60"><div class="cmb_row row mb-5" data-cmb-wrapper="cmb_row" data-cmb-element-type="static-layout" data-cmb-id="30"><div class="cmb_column col-sm-12" data-cmb-wrapper="cmb_column" data-cmb-id="32" data-cmb-element-type="static-layout"><div class="cmb-margin-bottom cmb-default-title-wrapper cmb_default_title cmb-element cmb-title-center" data-cmb-wrapper="cmb_default_title" data-cmb-id="31" data-cmb-element-type="static-layout"><h2 class="cmb-title"><span class="cmb-title-part-1 cmb-single-line-editable-text" data-cmb-lang-id="3"></span> <span class="cmb-title-part-2 cmb-single-line-editable-text" data-cmb-lang-id="4"></span></h2></div></div><div class="cmb_column col-sm-8 offset-2" data-cmb-wrapper="cmb_column" data-cmb-id="34" data-cmb-element-type="static-layout"><div class="cmb_editable_text" data-cmb-wrapper="cmb_editable_text" data-cmb-element-type="static-layout" data-cmb-id="35"><div class="cmb-editable-text"><div class="cmb-editable-text-container" data-cmb-lang-id="49"></div></div></div></div></div><div class="cmb_custom_tab cmb-element" data-cmb-wrapper="cmb_custom_tab" data-cmb-id="61" data-cmb-element-type="static-layout"><ul class="tab-nav"><li class="cmb_custom_tab_item text-center tab-active" data-cmb-wrapper="cmb_custom_tab_item" data-cmb-element-type="static-layout" data-cmb-id="62"><div class="d-flex cmb_custom_tab_link"><span class="m-auto"><span class="glyph-icon tab-icon flaticon-pie-chart-2"></span><strong class="font-size-18 d-block"><span class="cmb-single-line-editable-text" data-cmb-lang-id="5"></span></strong></span></div></li><li class="cmb_custom_tab_item text-center" data-cmb-wrapper="cmb_custom_tab_item" data-cmb-element-type="static-layout" data-cmb-id="63"><div class="d-flex cmb_custom_tab_link"><span class="m-auto"><span class="glyph-icon tab-icon flaticon-wallet-1"></span><strong class="font-size-18 d-block"><span class="cmb-single-line-editable-text" data-cmb-lang-id="6"></span></strong></span></div></li><li class="cmb_custom_tab_item text-center" data-cmb-wrapper="cmb_custom_tab_item" data-cmb-id="64" data-cmb-element-type="static-layout"><div class="d-flex cmb_custom_tab_link"><span class="m-auto"><span class="glyph-icon tab-icon flaticon-yen"></span><strong class="font-size-18 d-block"><span class="cmb-single-line-editable-text" data-cmb-lang-id="7"></span></strong></span></div></li><li class="cmb_custom_tab_item text-center" data-cmb-wrapper="cmb_custom_tab_item" data-cmb-id="65" data-cmb-element-type="static-layout"><div class="d-flex cmb_custom_tab_link"><span class="m-auto"><span class="glyph-icon tab-icon flaticon-graph-3"></span><strong class="font-size-18 d-block"><span class="cmb-single-line-editable-text" data-cmb-lang-id="8"></span></strong></span></div></li></ul><div class="tab-body mt-4"><div class="tab-inner tab-active"><div class="cmb-editable-text"><div class="cmb-editable-text-container" data-cmb-lang-id="50"></div></div></div><div class="tab-inner"><div class="cmb-editable-text"><div class="cmb-editable-text-container" data-cmb-lang-id="51"></div></div></div><div class="tab-inner"><div class="cmb-editable-text"><div class="cmb-editable-text-container" data-cmb-lang-id="52"></div></div></div><div class="tab-inner"><div class="cmb-editable-text"><div class="cmb-editable-text-container" data-cmb-lang-id="53"></div></div></div></div></div></div></div></div><div class="cmb_section_separator cmb-is-blank" data-cmb-wrapper="cmb_section_separator" data-cmb-id="75" data-cmb-element-type="static-layout"><span class="fa fa-code cmb-separator-icon"></span></div><div class="cmb_container container" data-cmb-wrapper="cmb_container" data-cmb-id="15" data-cmb-element-type="static-layout"><div class="tm_testimonial cmb_testimonial cmb-element" data-cmb-wrapper="cmb_testimonial" data-cmb-id="38" data-cmb-element-type="static-layout"><div class="cmb_testimonial_item cmb-element d-none" data-cmb-wrapper="cmb_testimonial_item" data-cmb-element-type="static-layout" data-cmb-id="40"><div class="row"><div class="col-md-4 col-sm-12 text-center"><div class="img lf-w-200px lf-h-200px rounded-circle overflow-hidden border-3 border-danger m-auto"><img src="/storage/images/regular_site/team-1.jpg" alt="client avatar" class="tm-testimonial-img"></div><h5 class="text-danger font-size-20 mb-0 mt-3"><span class="cmb-single-line-editable-text" data-cmb-lang-id="9"></span></h5><p class="font-size-18"><span class="cmb-single-line-editable-text" data-cmb-lang-id="10"></span></p></div><div class="col-md-8 col-sm-12"><blockquote class="blockquote d-flex"><i class="fa fa-quote-left text-danger"></i><div class="ml-3 pt-3 mt-md-3 mt-0"><p><i><span class="cmb-single-line-editable-text" data-cmb-lang-id="11"></span></i></p><div class="tm-btn-group mt-4"><button class="btn btn-sm font-size-18 btn-danger prev"><i class="fa fa-long-arrow-left"></i></button><button class="btn btn-sm font-size-18 btn-danger next"><i class="fa fa-long-arrow-right"></i></button></div></div></blockquote></div></div></div><div class="cmb_testimonial_item cmb-element d-none" data-cmb-wrapper="cmb_testimonial_item" data-cmb-element-type="static-layout" data-cmb-id="39"><div class="row"><div class="col-md-4 col-sm-12 text-center"><div class="img lf-w-200px lf-h-200px rounded-circle overflow-hidden border-3 border-danger m-auto"><img src="/storage/images/regular_site/client-1.jpg" alt="client avatar" class="tm-testimonial-img"></div><h5 class="text-danger font-size-20 mb-0 mt-3"><span class="cmb-single-line-editable-text" data-cmb-lang-id="12"></span></h5><p class="font-size-18"><span class="cmb-single-line-editable-text" data-cmb-lang-id="13"></span></p></div><div class="col-md-8 col-sm-12"><blockquote class="blockquote d-flex"><i class="fa fa-quote-left text-danger"></i><div class="ml-3 pt-3 mt-md-3 mt-0"><p><i><span class="cmb-single-line-editable-text" data-cmb-lang-id="14"></span></i></p><div class="tm-btn-group mt-4"><button class="btn btn-sm font-size-18 btn-danger prev"><i class="fa fa-long-arrow-left"></i></button><button class="btn btn-sm font-size-18 btn-danger next"><i class="fa fa-long-arrow-right"></i></button></div></div></blockquote></div></div></div><div class="cmb_testimonial_item cmb-element" data-cmb-wrapper="cmb_testimonial_item" data-cmb-id="41" data-cmb-element-type="static-layout"><div class="row"><div class="col-md-4 col-sm-12 text-center"><div class="img lf-w-200px lf-h-200px rounded-circle overflow-hidden border-3 border-danger m-auto"><img src="/storage/images/regular_site/team-2.jpg" alt="client avatar" class="tm-testimonial-img"></div><h5 class="text-danger font-size-20 mb-0 mt-3"><span class="cmb-single-line-editable-text" data-cmb-lang-id="15"></span></h5><p class="font-size-18"><span class="cmb-single-line-editable-text" data-cmb-lang-id="16"></span></p></div><div class="col-md-8 col-sm-12"><blockquote class="blockquote d-flex"><i class="fa fa-quote-left text-danger"></i><div class="ml-3 pt-3 mt-md-3 mt-0"><p><i><span class="cmb-single-line-editable-text" data-cmb-lang-id="17"></span></i></p><div class="tm-btn-group mt-4"><button class="btn btn-sm font-size-18 btn-danger prev"><i class="fa fa-long-arrow-left"></i></button><button class="btn btn-sm font-size-18 btn-danger next"><i class="fa fa-long-arrow-right"></i></button></div></div></blockquote></div></div></div></div></div></div></section><section class="cmb_section" data-cmb-wrapper="cmb_section" data-cmb-id="28" data-cmb-element-type="static-layout"><div class="section-overlay"><div class="cmb_container container" data-cmb-wrapper="cmb_container" data-cmb-id="29" data-cmb-element-type="static-layout"><div class="cmb_row row mb-5" data-cmb-wrapper="cmb_row" data-cmb-element-type="static-layout" data-cmb-id="66"><div class="cmb_column col-sm-12" data-cmb-wrapper="cmb_column" data-cmb-id="67" data-cmb-element-type="static-layout"><div class="cmb-margin-bottom cmb-default-title-wrapper cmb_default_title cmb-element cmb-title-center" data-cmb-wrapper="cmb_default_title" data-cmb-id="68" data-cmb-element-type="static-layout"><h2 class="cmb-title"><span class="cmb-title-part-1 cmb-single-line-editable-text" data-cmb-lang-id="18"></span><span class="cmb-title-part-2 cmb-single-line-editable-text" data-cmb-lang-id="19"></span></h2></div></div><div class="cmb_column col-sm-8 offset-2" data-cmb-wrapper="cmb_column" data-cmb-id="73" data-cmb-element-type="static-layout"><div class="cmb_editable_text" data-cmb-wrapper="cmb_editable_text" data-cmb-element-type="static-layout" data-cmb-id="74"><div class="cmb-editable-text"><div class="cmb-editable-text-container" data-cmb-lang-id="54"></div></div></div></div></div><div class="cmb_row row mt-2 mb-auto" data-cmb-wrapper="cmb_row" data-cmb-id="36" data-cmb-element-type="static-layout"><div class="cmb_column col-md-4" data-cmb-wrapper="cmb_column" data-cmb-element-type="static-layout" data-cmb-id="37"><div class="cmb_content_box cmb-element cover-image" data-cmb-wrapper="cmb_content_box" data-cmb-id="33" data-cmb-element-type="static-layout"><div class="cmb-main"><img src="/storage/images/regular_site/img-1.jpg" alt="cover-image" class="w-100 cover-image"><div class="cmb-content-box-icon"><i class="fa cmb-icon fa-btc"></i></div><div class="cmb-content"><h3 class="cmb-content-box-title"><span class="cmb-single-line-editable-text" data-cmb-lang-id="20"></span></h3><div class="cmb-content-box-content"><span class="cmb-single-line-editable-text" data-cmb-lang-id="21"></span></div></div></div><div class="cmb-content-box-link"><a href="#" class="btn cmb-content-box-btn btn-danger"><span class="cmb-single-line-editable-text" data-cmb-lang-id="22"></span></a></div></div></div><div class="cmb_column col-md-4" data-cmb-wrapper="cmb_column" data-cmb-element-type="static-layout" data-cmb-id="71"><div class="cmb_content_box cmb-element cover-image" data-cmb-wrapper="cmb_content_box" data-cmb-id="72" data-cmb-element-type="static-layout"><div class="cmb-main"><img src="/storage/images/regular_site/img-2.jpeg" alt="cover-image" class="w-100 cover-image"><div class="cmb-content-box-icon"><i class="fa cmb-icon fa-usd"></i></div><div class="cmb-content"><h3 class="cmb-content-box-title"><span class="cmb-single-line-editable-text" data-cmb-lang-id="23"></span></h3><div class="cmb-content-box-content"><span class="cmb-single-line-editable-text" data-cmb-lang-id="24"></span></div></div></div><div class="cmb-content-box-link"><a href="#" class="btn cmb-content-box-btn btn-danger"><span class="cmb-single-line-editable-text" data-cmb-lang-id="25"></span></a></div></div></div><div class="cmb_column col-md-4" data-cmb-wrapper="cmb_column" data-cmb-element-type="static-layout" data-cmb-id="69"><div class="cmb_content_box cmb-element cover-image" data-cmb-wrapper="cmb_content_box" data-cmb-id="70" data-cmb-element-type="static-layout"><div class="cmb-main"><img src="/storage/images/regular_site/img-3.jpg" alt="cover-image" class="w-100 cover-image"><div class="cmb-content-box-icon"><i class="fa cmb-icon fa-eur"></i></div><div class="cmb-content"><h3 class="cmb-content-box-title"><span class="cmb-single-line-editable-text" data-cmb-lang-id="26"></span></h3><div class="cmb-content-box-content"><span class="cmb-single-line-editable-text" data-cmb-lang-id="27"></span></div></div></div><div class="cmb-content-box-link"><a href="#" class="btn cmb-content-box-btn btn-danger"><span class="cmb-single-line-editable-text" data-cmb-lang-id="28"></span></a></div></div></div></div></div></div></section><section class="cmb_section" data-cmb-wrapper="cmb_section" data-cmb-id="43" data-cmb-element-type="static-layout"><div class="section-overlay"><div class="cmb_container container" data-cmb-wrapper="cmb_container" data-cmb-id="44" data-cmb-element-type="static-layout"><div class="cmb_row row mb-5" data-cmb-wrapper="cmb_row" data-cmb-element-type="static-layout" data-cmb-id="45"><div class="cmb_column col-sm-5" data-cmb-wrapper="cmb_column" data-cmb-id="46" data-cmb-element-type="static-layout"></div><div class="cmb_column col-sm-12" data-cmb-wrapper="cmb_column" data-cmb-id="47" data-cmb-element-type="static-layout"><div class="cmb-margin-bottom cmb-default-title-wrapper cmb_default_title cmb-element cmb-title-center" data-cmb-wrapper="cmb_default_title" data-cmb-id="48" data-cmb-element-type="static-layout"><h2 class="cmb-title"><span class="cmb-title-part-1 cmb-single-line-editable-text" data-cmb-lang-id="29"></span><span class="cmb-title-part-2 cmb-single-line-editable-text" data-cmb-lang-id="30"></span></h2></div></div><div class="cmb_column col-sm-8 offset-2" data-cmb-wrapper="cmb_column" data-cmb-id="49" data-cmb-element-type="static-layout"><div class="cmb_editable_text" data-cmb-wrapper="cmb_editable_text" data-cmb-element-type="static-layout" data-cmb-id="50"><div class="cmb-editable-text"><div class="cmb-editable-text-container" data-cmb-lang-id="55"></div></div></div></div></div><div class="cmb_row row mt-5" data-cmb-wrapper="cmb_row" data-cmb-id="51" data-cmb-element-type="static-layout"><div class="cmb_column col-md-4" data-cmb-wrapper="cmb_column" data-cmb-element-type="static-layout" data-cmb-id="52"><div class="cmb_person_box team-item text-center" data-cmb-wrapper="cmb_person_box" data-cmb-id="53" data-cmb-element-type="static-layout"><div class="position-relative"><img src="/storage/images/regular_site/team-1.jpg" alt="team member" class="cmb-person-avatar img-fluid"><div class="team-content d-flex"><div class="m-auto"><p class="text-white"><span class="cmb-single-line-editable-text" data-cmb-lang-id="31"></span></p><ul class="social-media-links"><li><a href="#" class="cmb-person-fb-link"><i class="fa fa-facebook cmb-social-media-icon"></i></a></li><li><a href="#" class="cmb-person-tw-link d-none"><i class="fa fa-twitter cmb-social-media-icon"></i></a></li><li><a class="nav-link cmb-person-yt-link" href="#"><i class="fa fa-youtube cmb-social-media-icon"></i></a></li><li><a class="nav-link cmb-person-li-link" href="#"><i class="fa fa-linkedin cmb-social-media-icon"></i></a></li><li><a class="nav-link cmb-person-so-link" href="#"><i class="fa fa-stack-overflow cmb-social-media-icon"></i></a></li></ul></div></div></div><div class="team-member-name p-3 bg-danger"><h3 class="font-size-22 text-white"><span class="cmb-single-line-editable-text cmb-person-name" data-cmb-lang-id="32"></span></h3></div></div></div><div class="cmb_column col-md-4" data-cmb-wrapper="cmb_column" data-cmb-element-type="static-layout" data-cmb-id="54"><div class="cmb_person_box team-item text-center" data-cmb-wrapper="cmb_person_box" data-cmb-id="55" data-cmb-element-type="static-layout"><div class="position-relative"><img src="/storage/images/regular_site/team-2.jpg" alt="team member" class="cmb-person-avatar img-fluid"><div class="team-content d-flex"><div class="m-auto"><p class="text-white"><span class="cmb-single-line-editable-text" data-cmb-lang-id="33"></span></p><ul class="social-media-links"><li><a href="#" class="cmb-person-fb-link"><i class="fa fa-facebook cmb-social-media-icon"></i></a></li><li><a href="#" class="cmb-person-tw-link d-none"><i class="fa fa-twitter cmb-social-media-icon"></i></a></li><li><a class="nav-link cmb-person-yt-link" href="#"><i class="fa fa-youtube cmb-social-media-icon"></i></a></li><li><a class="nav-link cmb-person-li-link" href="#"><i class="fa fa-linkedin cmb-social-media-icon"></i></a></li><li><a class="nav-link cmb-person-so-link" href="#"><i class="fa fa-stack-overflow cmb-social-media-icon"></i></a></li></ul></div></div></div><div class="team-member-name p-3 bg-danger"><h3 class="font-size-22 text-white"><span class="cmb-single-line-editable-text cmb-person-name" data-cmb-lang-id="34"></span></h3></div></div></div><div class="cmb_column col-md-4" data-cmb-wrapper="cmb_column" data-cmb-element-type="static-layout" data-cmb-id="56"><div class="cmb_person_box team-item text-center" data-cmb-wrapper="cmb_person_box" data-cmb-id="57" data-cmb-element-type="static-layout"><div class="position-relative"><img src="/storage/images/regular_site/team-3.jpg" alt="team member" class="cmb-person-avatar img-fluid"><div class="team-content d-flex"><div class="m-auto"><p class="text-white"><span class="cmb-single-line-editable-text" data-cmb-lang-id="35"></span></p><ul class="social-media-links"><li><a href="#" class="cmb-person-fb-link"><i class="fa fa-facebook cmb-social-media-icon"></i></a></li><li><a href="#" class="cmb-person-tw-link d-none"><i class="fa fa-twitter cmb-social-media-icon"></i></a></li><li><a class="nav-link cmb-person-yt-link" href="#"><i class="fa fa-youtube cmb-social-media-icon"></i></a></li><li><a class="nav-link cmb-person-li-link" href="#"><i class="fa fa-linkedin cmb-social-media-icon"></i></a></li><li><a class="nav-link cmb-person-so-link" href="#"><i class="fa fa-stack-overflow cmb-social-media-icon"></i></a></li></ul></div></div></div><div class="team-member-name p-3 bg-danger"><h3 class="font-size-22 text-white"><span class="cmb-single-line-editable-text" data-cmb-lang-id="36"></span></h3></div></div></div></div></div></div></section><section class="cmb_section" data-cmb-wrapper="cmb_section" data-cmb-id="9" data-cmb-element-type="static-layout"><div class="section-overlay"><div class="cmb_container container" data-cmb-wrapper="cmb_container" data-cmb-id="10" data-cmb-element-type="static-layout"><div class="cmb_row row align-items-center" data-cmb-wrapper="cmb_row" data-cmb-element-type="static-layout" data-cmb-id="13"><div class="cmb_column col-md-7" data-cmb-wrapper="cmb_column" data-cmb-id="14" data-cmb-element-type="static-layout"><div class="cmb-margin-bottom cmb-default-title-wrapper cmb_default_title cmb-element" data-cmb-wrapper="cmb_default_title" data-cmb-id="17" data-cmb-element-type="static-layout"><h2 class="cmb-title"><span class="cmb-title-part-1 cmb-single-line-editable-text" data-cmb-lang-id="37"></span><span class="cmb-title-part-2 cmb-single-line-editable-text" data-cmb-lang-id="38"></span></h2></div><div class="cmb_editable_text" data-cmb-wrapper="cmb_editable_text" data-cmb-id="19" data-cmb-element-type="static-layout"><div class="cmb-editable-text"><div class="cmb-editable-text-container" data-cmb-lang-id="56"></div></div></div></div><div class="cmb_column col-md-5" data-cmb-wrapper="cmb_column" data-cmb-id="16" data-cmb-element-type="static-layout"><a class="cmb_img" href="" data-cmb-wrapper="cmb_img" data-cmb-id="20" data-cmb-element-type="static-layout"><img class="img-fluid" src="/storage/images/regular_site/cryptocurrency.png" alt=""></a></div></div><div class="cmb_row row" data-cmb-wrapper="cmb_row" data-cmb-id="21" data-cmb-element-type="static-layout"><div class="cmb_column col-md-4" data-cmb-wrapper="cmb_column" data-cmb-element-type="static-layout" data-cmb-id="22"><div class="my-3 d-flex cmb_icon_box" data-cmb-wrapper="cmb_icon_box" data-cmb-id="76" data-cmb-element-type="static-layout"><div class="lf-w-100px"><span class="glyph-icon custom-icon flaticon-wallet-2"></span></div><div class="ml-3"><h4 class="mt-0 cmb-icon-box-title"><span class="cmb-single-line-editable-text" data-cmb-lang-id="39"></span></h4><p class="cmb-icon-box-content"><span class="cmb-single-line-editable-text" data-cmb-lang-id="40"></span></p><p><a href="#" class="btn btn-sm cmb-icon-box-btn btn-danger"><span class="cmb-single-line-editable-text" data-cmb-lang-id="41"></span></a></p></div></div></div><div class="cmb_column col-md-4" data-cmb-wrapper="cmb_column" data-cmb-element-type="static-layout" data-cmb-id="25"><div class="my-3 d-flex cmb_icon_box" data-cmb-wrapper="cmb_icon_box" data-cmb-id="26" data-cmb-element-type="static-layout"><div class="lf-w-100px"><span class="glyph-icon custom-icon flaticon-rich"></span></div><div class="ml-3"><h4 class="mt-0 cmb-icon-box-title"><span class="cmb-single-line-editable-text" data-cmb-lang-id="42"></span></h4><p class="cmb-icon-box-content"><span class="cmb-single-line-editable-text" data-cmb-lang-id="43"></span></p><p><a href="#" class="btn btn-sm cmb-icon-box-btn btn-danger"><span class="cmb-single-line-editable-text" data-cmb-lang-id="44"></span></a></p></div></div></div><div class="cmb_column col-md-4" data-cmb-wrapper="cmb_column" data-cmb-element-type="static-layout" data-cmb-id="23"><div class="my-3 d-flex cmb_icon_box" data-cmb-wrapper="cmb_icon_box" data-cmb-id="24" data-cmb-element-type="static-layout"><div class="lf-w-100px"><span class="glyph-icon custom-icon flaticon-megaphone"></span></div><div class="ml-3"><h4 class="mt-0 cmb-icon-box-title"><span class="cmb-single-line-editable-text" data-cmb-lang-id="45"></span></h4><p class="cmb-icon-box-content"><span class="cmb-single-line-editable-text" data-cmb-lang-id="46"></span></p><p><a href="#" class="btn btn-sm cmb-icon-box-btn btn-danger"><span class="cmb-single-line-editable-text" data-cmb-lang-id="47"></span></a></p></div></div></div></div></div></div></section>',
                'published_at' => '2020-11-03 07:09:21',
                'settings' => '{
                    "top_nav": "0",
                    "side_nav": "0",
                    "side_nav_fixed": "0",
                    "hide_breadcrumb": "1",
                    "navigation_type": "2",
                    "top_nav_transparent": "0",
                    "logo_inversed_top_nav": "0",
                    "logo_inversed_side_nav": "0"
                }',
                'is_home_page' => ACTIVE,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 3,
                'slug' => 'privacy-policy',
                'title' => 'Privacy Policy',
                'body' => '<section class="cmb_section" data-cmb-wrapper="cmb_section" data-cmb-id="5" data-cmb-element-type="static-layout"><div class="section-overlay"><div class="cmb_container container" data-cmb-wrapper="cmb_container" data-cmb-id="1"><div class="cmb_row row" data-cmb-wrapper="cmb_row" data-cmb-id="2"><div class="cmb_column col-sm-12" data-cmb-wrapper="cmb_column" data-cmb-id="3"><div class="cmb_editable_text" data-cmb-wrapper="cmb_editable_text" data-cmb-id="4"><div class="cmb-editable-text"><div class="cmb-editable-text-container" data-cmb-lang-id="1"></div></div></div></div></div></div></div></section>',
                'published_at' => '2020-11-03 07:09:21',
                'settings' => '{
                    "top_nav": "0",
                    "side_nav": "0",
                    "side_nav_fixed": "0",
                    "hide_breadcrumb": "1",
                    "navigation_type": "2",
                    "top_nav_transparent": "0",
                    "logo_inversed_top_nav": "0",
                    "logo_inversed_side_nav": "0"
                }',
                'is_home_page' => INACTIVE,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 4,
                'slug' => 'referral-programs',
                'title' => 'Referral Programs',
                'body' => '<section class="cmb_section" data-cmb-wrapper="cmb_section" data-cmb-id="16" data-cmb-element-type="static-layout"><div class="section-overlay"><div class="cmb_container container" data-cmb-wrapper="cmb_container" data-cmb-id="1"><div class="cmb_row row" data-cmb-wrapper="cmb_row" data-cmb-id="3"><div class="cmb_column col-sm-12" data-cmb-wrapper="cmb_column" data-cmb-id="5"><div class="cmb_editable_text" data-cmb-wrapper="cmb_editable_text" data-cmb-id="11"><div class="cmb-editable-text"><div class="cmb-editable-text-container" data-cmb-lang-id="16"></div></div></div></div></div></div><div class="cmb_container container" data-cmb-wrapper="cmb_container" data-cmb-id="2"><div class="cmb_row row" data-cmb-wrapper="cmb_row" data-cmb-id="4"><div class="cmb_column col-lg-4 col-md-6" data-cmb-wrapper="cmb_column" data-cmb-id="6"><div class="cmb_content_box cmb-element" data-cmb-wrapper="cmb_content_box" data-cmb-id="12"><div class="cmb-main"><div class="cmb-content-box-icon"><i class="fa cmb-icon fa-gg"></i></div><div class="cmb-content"><h3 class="cmb-content-box-title"><span class="cmb-single-line-editable-text" data-cmb-lang-id="1"></span></h3><div class="cmb-content-box-content"><span class="cmb-single-line-editable-text" data-cmb-lang-id="2"></span></div></div></div><div class="cmb-content-box-link d-none"><a href="" class="btn btn-success cmb-content-box-btn d-none"><span class="cmb-single-line-editable-text" data-cmb-lang-id="3"></span></a></div></div></div><div class="cmb_column col-md-6 col-lg-4" data-cmb-wrapper="cmb_column" data-cmb-id="7"><div class="cmb_content_box cmb-element" data-cmb-wrapper="cmb_content_box" data-cmb-id="17"><div class="cmb-main"><div class="cmb-content-box-icon"><i class="fa cmb-icon fa-gg"></i></div><div class="cmb-content"><h3 class="cmb-content-box-title"><span class="cmb-single-line-editable-text" data-cmb-lang-id="4"></span></h3><div class="cmb-content-box-content"><span class="cmb-single-line-editable-text" data-cmb-lang-id="5"></span></div></div></div><div class="cmb-content-box-link d-none"><a href="" class="btn btn-success cmb-content-box-btn d-none"><span class="cmb-single-line-editable-text" data-cmb-lang-id="7"></span></a></div></div></div><div class="cmb_column col-md-12 col-lg-4" data-cmb-wrapper="cmb_column" data-cmb-id="8"><div class="cmb_content_box cmb-element" data-cmb-wrapper="cmb_content_box" data-cmb-id="18"><div class="cmb-main"><div class="cmb-content-box-icon"><i class="fa cmb-icon fa-gg"></i></div><div class="cmb-content"><h3 class="cmb-content-box-title"><span class="cmb-single-line-editable-text" data-cmb-lang-id="8"></span></h3><div class="cmb-content-box-content"><span class="cmb-single-line-editable-text" data-cmb-lang-id="9"></span></div></div></div><div class="cmb-content-box-link d-none"><a href="" class="btn btn-success cmb-content-box-btn d-none"><span class="cmb-single-line-editable-text" data-cmb-lang-id="11"></span></a></div></div></div><div class="cmb_column col-md-12" data-cmb-wrapper="cmb_column" data-cmb-id="9"><div class="cmb_content_box cmb-element" data-cmb-wrapper="cmb_content_box" data-cmb-id="19"><div class="cmb-main"><div class="cmb-content-box-icon"><i class="fa cmb-icon fa-gg"></i></div><div class="cmb-content"><h3 class="cmb-content-box-title"><span class="cmb-single-line-editable-text" data-cmb-lang-id="12"></span></h3><div class="cmb-content-box-content"><span class="cmb-single-line-editable-text" data-cmb-lang-id="13"></span></div></div></div><div class="cmb-content-box-link d-none"><a href="" class="btn btn-success cmb-content-box-btn d-none"><span class="cmb-single-line-editable-text" data-cmb-lang-id="15"></span></a></div></div></div><div class="cmb_column col-md-4" data-cmb-wrapper="cmb_column" data-cmb-id="10"></div></div></div></div></section>',
                'published_at' => '2020-11-03 07:09:21',
                'settings' => '{
                    "top_nav": "0",
                    "side_nav": "0",
                    "side_nav_fixed": "0",
                    "hide_breadcrumb": "1",
                    "navigation_type": "2",
                    "top_nav_transparent": "0",
                    "logo_inversed_top_nav": "0",
                    "logo_inversed_side_nav": "0"
                }',
                'is_home_page' => INACTIVE,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 5,
                'slug' => 'about-us',
                'title' => 'About Us',
                'body' => '<section class="cmb_section" data-cmb-wrapper="cmb_section" data-cmb-id="9" data-cmb-element-type="static-layout"><div class="section-overlay"><div class="cmb_container container" data-cmb-wrapper="cmb_container" data-cmb-id="1"><div class="cmb_row row" data-cmb-wrapper="cmb_row" data-cmb-id="2"><div class="cmb_column col-sm-12" data-cmb-wrapper="cmb_column" data-cmb-id="3"><div class="cmb_editable_text" data-cmb-wrapper="cmb_editable_text" data-cmb-id="6"><div class="cmb-editable-text"><div class="cmb-editable-text-container" data-cmb-lang-id="1"></div></div></div></div><div class="cmb_column col-sm-6" data-cmb-wrapper="cmb_column" data-cmb-id="4"><div class="cmb_editable_text" data-cmb-wrapper="cmb_editable_text" data-cmb-id="7"><div class="cmb-editable-text"><div class="cmb-editable-text-container" data-cmb-lang-id="2"></div></div></div></div><div class="cmb_column col-sm-6" data-cmb-wrapper="cmb_column" data-cmb-id="5"><a class="cmb_img" data-cmb-wrapper="cmb_img" data-cmb-id="8"><img class="img-fluid" src="/storage/images/regular_site/about-us.jpg" alt=""></a></div></div></div></div></section>',
                'published_at' => '2020-11-03 07:09:21',
                'settings' => '{
                    "top_nav": "0",
                    "side_nav": "0",
                    "side_nav_fixed": "0",
                    "hide_breadcrumb": "0",
                    "navigation_type": "2",
                    "top_nav_transparent": "0",
                    "logo_inversed_top_nav": "0",
                    "logo_inversed_side_nav": "0"
                }',
                'is_home_page' => INACTIVE,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 6,
                'slug' => 'public-api',
                'title' => 'Public API',
                'body' => '<section class="cmb_section" data-cmb-wrapper="cmb_section" data-cmb-id="5" data-cmb-element-type="static-layout"><div class="section-overlay"><div class="cmb_container container" data-cmb-wrapper="cmb_container" data-cmb-id="1"><div class="cmb_row row" data-cmb-wrapper="cmb_row" data-cmb-id="2"><div class="cmb_column col-sm-12" data-cmb-wrapper="cmb_column" data-cmb-id="3"><div class="cmb_editable_text" data-cmb-wrapper="cmb_editable_text" data-cmb-id="4"><div class="cmb-editable-text"><div class="cmb-editable-text-container" data-cmb-lang-id="1"></div></div></div></div></div></div></div></section>',
                'published_at' => '2020-11-03 07:09:21',
                'settings' => '{
                    "top_nav": "0",
                    "side_nav": "0",
                    "side_nav_fixed": "0",
                    "hide_breadcrumb": "1",
                    "navigation_type": "2",
                    "top_nav_transparent": "0",
                    "logo_inversed_top_nav": "0",
                    "logo_inversed_side_nav": "0"
                }',
                'is_home_page' => INACTIVE,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 7,
                'slug' => 'private-api',
                'title' => 'Private API',
                'body' => '<section class="cmb_section" data-cmb-wrapper="cmb_section" data-cmb-id="5" data-cmb-element-type="static-layout"><div class="section-overlay"><div class="cmb_container container" data-cmb-wrapper="cmb_container" data-cmb-id="1"><div class="cmb_row row" data-cmb-wrapper="cmb_row" data-cmb-id="2"><div class="cmb_column col-sm-12" data-cmb-wrapper="cmb_column" data-cmb-id="3"><div class="cmb_editable_text" data-cmb-wrapper="cmb_editable_text" data-cmb-id="4"><div class="cmb-editable-text"><div class="cmb-editable-text-container" data-cmb-lang-id="1"></div></div></div></div></div></div></div></section>',
                'published_at' => '2020-11-03 07:09:21',
                'settings' => '{
                    "top_nav": "0",
                    "side_nav": "0",
                    "side_nav_fixed": "0",
                    "hide_breadcrumb": "1",
                    "navigation_type": "2",
                    "top_nav_transparent": "0",
                    "logo_inversed_top_nav": "0",
                    "logo_inversed_side_nav": "0"
                }',
                'is_home_page' => INACTIVE,
                'created_at' => $date,
                'updated_at' => $date,
            ],
        ];

        Page::insert($pages);
    }
}
