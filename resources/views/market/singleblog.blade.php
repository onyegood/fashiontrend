@extends('layouts.app')

@section('content')

    <!-- Shop Page Banner
============================================ -->
    <div class="page-banner text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Blog</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Sideabr Product Container
    ============================================ -->
    <div class="blog-page pages">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="sin-blog-post">
                        <div class="blog-details">
                            <div class="top fix">
                                <a href="#" class="blog-cat float-left">Lifestyle</a>
                            </div>
                            <h2 class="title">Wearable tech made strides in 2015</h2>
                            <div class="blog-meta">
                                By <a href="#">Shanon Cold</a> | Dec 31, 2015
                            </div>
                            <p>In a professional context it often happens that private or corporate clients corder a publication to be made and presented with the actual content still not being ready. Think of a news blog that’s filled with content hourly on the day of going live. However, reviewers tend to be distracted by comprehensible content, say, a random text copied  newspaper or the internet. The are to focus on the text, disregarding the layout and its elements. Besides, random text risks to be unintendedly humorous or offensive, an unacceptable risk in corporate environments.</p>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Aenean commodo ligula eget dolor aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Aenean commodo ligula eget dolor aenean massa. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            <blockquote><p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p></blockquote>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Aenean commodo ligula eget dolor aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec vitae sapien ut libero venenatis faucibus Nulla consequat massa quis enim.</p>
                            <div class="post-tag-share fix">
                                <div class="post-tags float-left">
                                    <strong>TAGS :</strong> <a href="#">Tech</a>, <a href="#">Wearable</a>, <a href="#">Fashion</a>
                                </div>
                                <div class="post-share float-right">
                                    <strong>Share This :</strong>
                                    <a href="#"><i class="mo-facebook"></i></a>
                                    <a href="#"><i class="mo-twitter"></i></a>
                                    <a href="#"><i class="mo-google-plus"></i></a>
                                    <a href="#"><i class="mo-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prev-next-post fix">
                        <div class="prev-post float-left text-left">
                            <span>Previous Post</span>
                            <a href="#">The Love Advent calendar <br />is the real meaning of Christmas</a>
                        </div>
                        <div class="next-post float-right text-right">
                            <span>Next Post</span>
                            <a href="#">How to design the <br />perfect home and office interior</a>
                        </div>
                    </div>
                    <div class="blog-comments fix">
                        <h2>02 Comments</h2>
                        <ul class="comments-container">
                            <li>
                                <div class="sin-comment">
                                    <div class="image float-left">
                                        <img src="{{ asset('img/comments/1.png') }}" alt="comments" />
                                    </div>
                                    <div class="comment-details fix">
                                        <h3>Mingel Hoops</h3>
                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.
                                            Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos. Mauris in erat justo.</p>
                                        <div class="bottom fix">
                                            <a href="#" class="reply float-left">Reply</a>
                                            <span class="date float-right">December 28, 2015 at 3:20 pm</span>
                                        </div>
                                    </div>
                                </div>
                                <ul class="child-comments-container">
                                    <li>
                                        <div class="sin-comment">
                                            <div class="image float-left"><img src="{{ asset('img/comments/2.png') }}" alt="comments" /></div>
                                            <div class="comment-details fix">
                                                <h3>Rihana Llyod</h3>
                                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos. Mauris in erat justo.</p>
                                                <div class="bottom fix">
                                                    <a href="#" class="reply float-left">Reply</a>
                                                    <span class="date float-right">December 29, 2015 at 11:35 pm</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="comment-form">
                            <h2>Leave your comment</h2>
                            <form id="comment-form" action="#" class="moon-form">
                                <div class="input-box">
                                    <input type="text" placeholder="Name">
                                </div>
                                <div class="input-box input-box-2">
                                    <input type="text" placeholder="Email">
                                </div>
                                <div class="input-box input-box-2">
                                    <input type="text" placeholder="Website">
                                </div>
                                <div class="input-box">
                                    <textarea rows="5" placeholder="Message" id="rev-message" name="review"></textarea>
                                </div>
                                <div class="input-box">
                                    <input type="submit" value="Comment">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection