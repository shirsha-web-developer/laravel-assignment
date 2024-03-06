<div>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
</div>
<!DOCTYPE html>
<html>
<body>

<h1>Test questions</h1>

<form action="{{route('countscore')}}" method="POST">
    @csrf
    @foreach($questions as $q)
  <p>{{$q['question']}}</p>
  <input type="radio" id="html" name="option{{$loop->iteration}}" value="{{$q['option1']}}">
  <label for="html">{{$q['option1']}}</label><br>
  <input type="radio" id="css" name="option{{$loop->iteration}}" value="{{$q['option2']}}">
  <label for="css">{{$q['option2']}}</label><br>
  <input type="radio" id="javascript" name="option{{$loop->iteration}}" value="{{$q['option3']}}">
  <label for="javascript">{{$q['option3']}}</label>

  <br>  
    @endforeach
  
  <input type="submit" value="Submit">
</form>

</body>
</html>
