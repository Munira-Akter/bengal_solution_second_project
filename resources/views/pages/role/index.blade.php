@extends('layouts.apps')
@section('main')
<div class="content_wrap with_title">
    <div class="top_panel_title">
       <div class="top_panel_title_inner">
          <h1 class="page_title">All Roles</h1>
       </div>
    </div>
    <div class="sc_section_content_wrap">
        <div class="sc_table">
           <table>
              <thead>
                 <tr>
                    <td>All Roles</td>
                    <td></td>
                    <td></td>
                 </tr>
              </thead>
              <tbody>
                 <tr>
                    <td> SL No.</td>
                    <td> Role Name</td>
                    <td> Action</td>
                 </tr>
                 <tr>
                    <td> #14567</td>
                    <td> Feb 24, 2015</td>
                    <td><a class="custom-btn">Edit</a>&nbsp;<a class="custom-btn-danger">Delete</a></td>
                 </tr>
                 <tr>
                    <td> #14567</td>
                    <td> Feb 24, 2015</td>
                    <td><a class="custom-btn">Edit</a>&nbsp;<a class="custom-btn-danger">Delete</a></td>
                 </tr>
                 <tr>
                    <td> #14567</td>
                    <td> Feb 24, 2015</td>
                    <td><a class="custom-btn">Edit</a>&nbsp;<a class="custom-btn-danger">Delete</a></td>
                 </tr>

              </tbody>
           </table>
           <p></p>
        </div>
     </div>
    <!-- </article> class="post_item post_item_single post_format_standard page hentry"> -->
    <a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>
 </div>

 <div class="sidebar_wrap sidebar widget_area scheme_original" role="complementary" style="width: 410px;">
    <div class="sidebar_inner widget_area_inner">
       <aside class="widget_number_1 widget widget_birthdays" style="margin-top:30px;">
        <div id="sc_form_227_wrap" class="sc_form_wrap">
            <div id="sc_form_227" class="sc_form sc_form_style_form_1">
               <h4 class="sc_form_title sc_item_title sc_item_title_without_descr">Add New User</h4>
               <form id="sc_form_227_form" class="sc_input_hover_default inited" data-formtype="form_1" method="post" action="includes/sendmail.php">
                  <div class="sc_form_info">
                     <div class="sc_form_item sc_form_field label_over">
                        <input id="sc_form_username" type="text" name="username" placeholder="Role Name *" aria-required="true">
                     </div>


                  </div>

                  <div class="sc_form_item sc_form_button">
                     <button>Add Role</button>
                  </div>
                  <div class="result sc_infobox"></div>
               </form>
            </div>
         </div>
       </aside>

    </div>
 </div>
@endsection
