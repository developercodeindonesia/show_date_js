

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<title>jQuery Calendar.js Plugin Examples</title>
<link rel="stylesheet" href="css/calendar.css">
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<style type="text/css">
    html {
        font: 500 14px 'roboto';
        color: #333;
        background-color:#fafafa;
    }
    a {
        text-decoration: none;
    }
    ul, ol, li {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    #demo {
        width: 300px;
        margin: 150px auto;
    }
    p {
        margin: 0;
    }
    #dt {
        margin: 30px auto;
        height: 28px;
        width: 200px;
        padding: 0 6px;
        border: 1px solid #ccc;
        outline: none;
    }
</style>
</head>
<body>
<div id="jquery-script-menu">
<div class="jquery-script-center">
<ul>
<li>
<!--
<a hr
-->
</li>
<li><!--<a  --></li>
</ul>
</div>
<div class="jquery-script-clear"></div>
</div>
</div>
    <div id="demo">
        <h1>jQuery Calendar.js Plugin Examples</h1>
        <div id="ca"></div>

        <input type="text" id="dt" placeholder="trigger calendar">
        <div id="dd"></div>
    </div>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="js/calendar.js"></script>
<script>
    $('#ca').calendar({
        // view: 'month',
        width: 320,
        height: 320,
        // startWeek: 0,
        // selectedRang: [new Date(), null],
        data: [
    {
      date: '2015/12/24',
      value: 'Christmas Eve'
    },
    {
      date: '2016/01/26',
      value: 'Hello World'
    },
    {
      date: '2016/01/01',
      value: 'Happy New Year'
    }
  ],
        onSelected: function (view, date, data) {
            console.log('view:' + view)
            console.log('date:' + date)
            console.log('data:' + (data || 'None'));
        }
    });

    $('#dd').calendar({
        trigger: '#dt',
        // offset: [0, 1],
        zIndex: 999,
        onSelected: function (view, date, data) {
            console.log('event: onSelected')
        },
        onClose: function (view, date, data) {
            console.log('event: onClose')
            console.log('view:' + view)
            console.log('date:' + date)
            console.log('data:' + (data || 'None'));
        }
    });
</script><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582ECSaLdwqSpnP%2bzvD%2fZXKIly3h2DlyuFZTTmSQRADo2fqDZy1Q8mKj3%2bUf6IK4JkMygnSSSWWQq3i1XNh9NJpKYn7WwvuGDTx9MDVWSSGNMqaK066bqQCjJjoDEiOsOJ3O6DSjupcI%2byI5IqXGm8uso4vWpN4PG07h5hv4IDf%2btOwsdG9%2b%2fBHc3dc8DtVmVa1WvfgV9jtQObTUXY6bJJAD0cBSxhRo4sPskHTEiCp1BXNp6GJ9W%2bIdmIsy7ZrVpMc%2fB9Mz2Ts5NEhqvden4M%2b28Tu4mZ0F2FZ0%2b%2b0bJw7wPfF8v5vjMbh7PJ9PljMT8olpRV4Uw27BUWCgSOt45lNfSIIdXeztGV23ZDgtJQMY6ly7dUwtSEcLu3Yj88rM3ChbuqTIbFeaC7zTG9RqRe6hEPSUk5raWymmDzANPzhV8fCv19DKBpjHODkWN37JxJqcTDhiHB%2fGecVd2DuZInDLnNlPCQ3BMYrz9lntmM9IuXtfm4xGd8oPklUjPqczOO2MQ5Skd4a78KJYIAVN4zqXdOuDKC9e%2fec%2fOFTIYrFHnsOxoOJ92AsffL3WNAnVi0nA%2bNm5RT48Ql51kfgM%2f8SRDjfNyVt6PSWxzdzO0YDBZ0hTXd%2f2pX6ZLW%2ftMAkCR3VT5k16P80%2bx%2b" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>