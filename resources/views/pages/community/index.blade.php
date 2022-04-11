@extends('layouts.apps')
@section('main')
<div class="content_wrap with_title">
    <div class="top_panel_title">
       <div class="top_panel_title_inner">
          <h1 class="page_title">Micro Office</h1>
       </div>
    </div>
    <article class="post_item post_item_single post_format_standard forum type-forum hentry">
       <section class="post_content">
          <div id="bbpress-forums">
             <div class="bbp-search-form">
                <form role="search" method="get" id="bbp-search-form" action="#">
                   <div>
                      <label class="screen-reader-text hidden" for="bbp_search">Search for:</label>
                      <input type="hidden" name="action" value="bbp-search-request" />
                      <input tabindex="101" type="text" value="" name="bbp_search" id="bbp_search" />
                      <input tabindex="102" class="button" type="submit" id="bbp_search_submit" value="Search" />
                   </div>
                </form>
             </div>
             <div class="bbp-breadcrumb">
                <p><a href="index.html" class="bbp-breadcrumb-home">Home 1</a>
                   <span class="bbp-breadcrumb-sep">&rsaquo;</span>
                   <span class="bbp-breadcrumb-current">Forums</span>
                </p>
             </div>
             <ul class="bbp-forums">
                <li class="bbp-header">
                   <ul class="forum-titles">
                      <li class="bbp-forum-info">Forum</li>
                      <li class="bbp-forum-topic-count">Reply</li>
                      <li class="bbp-forum-reply-count">View</li>
                      <li class="bbp-forum-freshness">Freshness</li>
                   </ul>
                </li>
                <!-- .bbp-header -->
                <li class="bbp-body">
                   <ul class="loop-item-0 odd bbp-forum-status-open bbp-forum-visibility-publish forum type-forum hentry">
                      <li class="bbp-forum-info">
                         <a class="bbp-forum-title" href="single-topic.html">A Simple Plan to Fix Our Economy.</a>
                         <div class="bbp-forum-content">
                            Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus,
                            omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                            saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus,
                            ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat
                         </div>
                      </li>
                      <li class="bbp-forum-topic-count">0</li>
                      <li class="bbp-forum-reply-count">100</li>
                      <li class="bbp-forum-freshness">
                         No Topics
                         <p class="bbp-topic-meta">
                            <span class="bbp-topic-freshness-author"></span>
                         </p>
                      </li>
                   </ul>
                   <ul class="loop-item-1 even bbp-forum-status-open bbp-forum-visibility-publish forum type-forum hentry">
                      <li class="bbp-forum-info">
                         <a class="bbp-forum-title" href="single-topic.html">Analytics: Etiam in finibus felis amet.</a>
                         <div class="bbp-forum-content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                         </div>
                      </li>
                      <li class="bbp-forum-topic-count">2</li>
                      <li class="bbp-forum-reply-count">7</li>
                      <li class="bbp-forum-freshness">
                         <a href="#" title="Reply To: Accusantium doloremque laudantium">4 months, 4 weeks ago</a>
                         <p class="bbp-topic-meta">
                            <span class="bbp-topic-freshness-author">
                               <a href="single-team.html" title="View Maria Anderson&#039;s profile" class="bbp-author-avatar" rel="nofollow">
                                  <img src="{{asset('assets/images/1000.png')}}" class="avatar user-3-avatar avatar-14 photo" width="14" height="14" alt="" />
                               </a>&nbsp;
                               <a href="single-team.html" title="View Maria Anderson&#039;s profile" class="bbp-author-name" rel="nofollow">Maria Anderson</a>
                            </span>
                         </p>
                      </li>
                   </ul>
                   <ul class="loop-item-2 bbp-forum-status-open bbp-forum-visibility-publish forum type-forum hentry">
                      <li class="bbp-forum-info">
                         <a class="bbp-forum-title" href="single-topic.html">Business Travel: Donec mattis quis lorem sed.</a>
                         <div class="bbp-forum-content">
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem.
                         </div>
                      </li>
                      <li class="bbp-forum-topic-count">1</li>
                      <li class="bbp-forum-reply-count">4</li>
                      <li class="bbp-forum-freshness">
                         <a href="single-topic.html" title="Reply To: emporibus autem quibusdam">4 months, 4 weeks ago</a>
                         <p class="bbp-topic-meta">
                            <span class="bbp-topic-freshness-author">
                               <a href="single-team.html" title="View John Snow&#039;s profile" class="bbp-author-avatar" rel="nofollow">
                                  <img src="{{asset('assets/images/1000.png')}}" class="avatar user-2-avatar avatar-14 photo" width="14" height="14" alt="" />
                               </a>&nbsp;
                               <a href="single-team.html" title="View John Snow&#039;s profile" class="bbp-author-name" rel="nofollow">John Snow</a>
                            </span>
                         </p>
                      </li>
                   </ul>
                   <ul class="loop-item-3 even bbp-forum-status-open bbp-forum-visibility-publish forum type-forum hentry">
                      <li class="bbp-forum-info">
                         <a class="bbp-forum-title" href="single-topic.html">Business Travel: Donec mattis quis lorem sed.</a>
                         <div class="bbp-forum-content">
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque
                            corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,
                            similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                            Et harum quidem rerum facilis est et expedita distinctio.
                         </div>
                      </li>
                      <li class="bbp-forum-topic-count">0</li>
                      <li class="bbp-forum-reply-count">0</li>
                      <li class="bbp-forum-freshness">
                         No Topics
                         <p class="bbp-topic-meta">
                            <span class="bbp-topic-freshness-author"></span>
                         </p>
                      </li>
                   </ul>
                   <ul id="bbp-forum-2350" class="loop-item-4 odd bbp-forum-status-open bbp-forum-visibility-publish forum type-forum hentry">
                      <li class="bbp-forum-info">
                         <a class="bbp-forum-title" href="single-topic.html">Office Managment: Nunc eget consectetur tellus.</a>
                         <div class="bbp-forum-content">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                         </div>
                      </li>
                      <li class="bbp-forum-topic-count">0</li>
                      <li class="bbp-forum-reply-count">0</li>
                      <li class="bbp-forum-freshness">
                         No Topics
                         <p class="bbp-topic-meta">
                            <span class="bbp-topic-freshness-author"></span>
                         </p>
                      </li>
                   </ul>
                </li>
                <li class="bbp-footer">
                   <div class="tr">
                      <p class="td colspan4">&nbsp;</p>
                   </div>
                </li>
             </ul>
          </div>
       </section>
    </article>
    <a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>
 </div>
@endsection
