@extends('layouts.app')
@section('main')
<div class="content_wrap">
    <article class="post_item post_item_single post_format_standard page hentry">
       <section class="post_content">
          <div class="vc_row wpb_row vc_row-fluid">
             <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                   <div class="wpb_wrapper">
                      <figure class="sc_image  sc_image_shape_square full_width">
                         <img src="{{ asset('assets/images/banner-1.jpg') }}" alt="" />
                      </figure>
                      <div class="vc_empty_space hpx_30">
                        <span class="vc_empty_space_inner"></span>
                     </div>
                     @include('pages.home.count')
                     <div class="vc_empty_space hem_4-1">
                        <span class="vc_empty_space_inner"></span>
                     </div>

                   </div>
                </div>
             </div>
          </div>
          <div class="vc_row wpb_row vc_row-fluid">
             <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                   <div class="wpb_wrapper">
                      <h2 class="sc_title sc_title_underline">Welcome back, Douglas!</h2>
                      <div class="vc_empty_space hpx_17">
                         <span class="vc_empty_space_inner"></span>
                      </div>
                      <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">

                        @include('pages.home.recent_reply')

                        @include('pages.home.recent_community')

                      </div>
                   </div>
                </div>
             </div>
          </div>
       </section>
       <section class="related_wrap related_wrap_empty"></section>
    </article>
    @include('partials.back_to_top')
 </div>
 @endsection
