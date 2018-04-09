<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
    <title>Twitter</title>
</head>
<body>
    <nav class="navbar bg-primary navbar-dark navbar-expand-lg">
        <div class="container">
            <div class="navbar-header">
                <a href="/" class="navbar-brand">Brand</a>
            </div>
         </div>
    </nav>

    <div class="container mt-5">
        <form action="{{route('post.tweet')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert-alert-danger">
                        {{$error}}
                    </div>
                @endforeach
            @endif
        <fieldset>
            <div class="form-group">
            <label for="exampleInputEmail1">Tweet Text</label>
            <input type="text" class="form-control" placeholder="Enter Tweet" name="tweet">
            </div>
            <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-primary mb-3">Create Tweet</button>
        </fieldset>
        </form>
        @if(!empty($data))
            @foreach($data as $key => $tweet)
                <div class="card my-2">
                    <div class="card-header">
                        <h3>
                          {{$tweet['text']}} 
                          <i class="glyphicon glyphicon-heart"></i> {{$tweet['favorite_count']}}
                          <i class="glyphicon glyphicon-repeat"></i> {{$tweet['retweet_count']}}
                        </h3>
                    </div>
                    <div class="card-body">
                        @if(!empty($tweet['extended_entities']['media']))
                            @foreach($tweet['extended_entities']['media'] as $i)
                                <img src="{{$i['media_url_https']}} " style="width:100px;">
                            @endforeach
                        @endif
                    </div>
                </div>
            @endforeach
        @else
            <p>No Tweets Found!</p>
        @endif
    </div>

</body>
</html>