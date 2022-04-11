<!DOCTYPE html>
<html lang="en-US" class="scheme_original">
   @include('partials.head')
   <body class="home-page home-1 home page body_style_wide body_type_2 body_transparent article_style_stretch scheme_original sidebar_show wpb-js-composer vc_responsive no-js">
      <div class="body_wrap">
         <div class="page_wrap">
            @include('layouts.header')
            <!-- </.top_panel_wrap> -->
            <div class="page_content_wrap">
               @include('layouts.sidemenu')

               @yield('main')

            </div>
            @include('layouts.footer')
         </div>
      </div>
      @include('partials.scripts')
      @stack('scripts')
   </body>
</html>
