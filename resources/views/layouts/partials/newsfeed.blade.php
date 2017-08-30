
@section('newsfeed')

      <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                         @forelse ($posts as $post)

                            <div class='well'>
                                 <div class='media'>
                                     <div class='media-body'>
                                        <a type="submit" href="http://localhost:8080/Tech_Blog/public/{{$post->slug}}">
                                        <h4   class='media-heading'>{{$post->title}}</h4></a>
                                       <p class='text-right'>By: {{$post->user->name}}
                                        <p>{{$post->body}}</p>
                                        <ul class='list-inline list-unstyled'>
                                           <li><span><i class='pe-7s-date'> </i>

                                        
                                           {{$post->created_at}}  |
                                         
                                         @if($post->reply->count()>0)

                                           {{$post->reply->count()}} Comments
                                        @else
                                          Be the first to Comment.
                                         @endif 
                                          
                                           @if(Auth::user() && Auth::user()->id==$post->user_id)
                                           <form method="POST" action="{{ url('/EditQuestion') }}">
                                               <span><i class='pe-7s-pen'> </i>
                                             <input type="hidden" name="id" value="{{$post->id}}"> 
                                             <button type="submit" class="btn-link">Edit</button>
                                           <form>
                                           @endif
                                           
                                           </span>
                                           </li>
                                        </ul>
                                     </div>
                                    @if(Auth::user() && Auth::user()->id==$post->user_id)
                                            <form method="POST" action="{{ url('/DeleteQuestion') }}"> 
                                                    {{ csrf_field() }} 
                                                 <input type="hidden" name="post_id" value="{{$post->id}}">
                                                 <button type="submit" class="btn btn-danger btn-fill pull-right">Delete Question</button>
                                                <div class="clearfix"></div>
                                            </form>
                                     @endif
                                 </div>
                            </div>
                         @empty
                         <p> No Posts Found</p>
                         @endforelse
                     </div>
                </div>
                <div class="text-center"> {{$posts->appends(Request::all())->render()}}</div>
             </div>
        </div>
            
        
@endsection 