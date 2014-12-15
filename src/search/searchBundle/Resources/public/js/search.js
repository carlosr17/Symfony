function searchKey(url){
	var key=$("#search").val();
	var divKeys=$("#keys");
	var divTweets=$("#tweets");
	$.ajax({
		data:{
			'key': key
			},
			url:url,
			type:'get',
			success: function(data){
				var history=data.history;
				var tweets=data.tweets;
				divKeys.html(renderKeys(history));
				divTweets.html(renderTweets(tweets));
			}
	});
}

function renderKeys(datos){
	var html="<h2>Historial</h2>"
	$.each(datos, function(i, item) {
		html+="<div><b>"+item.name+"</b> "+item.date+"</div>";
	});
	return html;
}

function renderTweets(datos){
	var html="<h2>Tweets</h2>";
	$.each(datos, function(i, item) {
		html+=renderTweet(item);
	});
	return html;
}

function renderTweet(tweet){
	var url="http://www.twitter.com/"+tweet.user;
	var imagen="<a href='"+url+"'><img src='"+tweet.img+"'/i></a>";
	var url_user="<a href='"+url+"'>"+tweet.user+"</a>";
	return "<div class='col-md-12 tweet'>"+
			"<div class='col-md-2'>"+imagen+"</div>"+"<div class='col-md-10'>"+url_user+tweet.text+tweet.time+"</div></div>";
}