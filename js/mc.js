
		    // 获取元素
		    var video = $("video").get(0);  // 把jQuery 对象转换为 dom对象
		    // 计算时分秒函数formatTime
		    function formatTime(time) {
		    var h = Math.floor(time / 3600);
		    var m = Math.floor(time % 3600 / 60);
		    var s = Math.floor(time % 60);
		    // 00:00:00
		    return (h < 10 ? "0" + h : h) + ":" + (m < 10 ? "0" + m : m) + ":" + (s < 10 ? "0" + s : s);
		    }
		    // 当浏览器可以播放视频的时候，就让video显示出来，同时显示出视频的总时长
		    video.oncanplay = function() {
		      $("video").show();
		      var totalTime = formatTime(video.duration);
		      $(".total").html(totalTime);  // 把计算出来的总时长放入页面中的元素中
		    };
		    $(".switch").on("click", function() {
		      if ($(this).hasClass("fa-play")) { 
		        video.play();               // 播放
		        $(this).addClass("fa-pause").removeClass("fa-play");  // 切换图标
		      } else { 
		        video.pause();              // 暂停
		        $(this).addClass("fa-play").removeClass("fa-pause");  // 切换图标
		      }
		      video.ontimeupdate = function() {
		        var w = video.currentTime / video.duration * 100 + "%";
		        $(".line").css("width", w);
		        $(".current").html(formatTime(video.currentTime));
		      };
		      $(".expand").on("click", function() {
		        if ($(this).hasClass("fa-arrows-alt")) {  // 播放
		          video.webkitRequestFullScreen();        // 全屏显示
		          $(this).addClass("fa-compress").removeClass("fa-arrows-alt");
		        } else {
		          document.webkitCancelFullScreen();      // 取消全屏显示
		          $(this).addClass("fa-arrows-alt").removeClass("fa-compress");
		        }
		      });
		      video.onended = function () {
		        // 当前的视频时长清零 
		        video.currentTime = 0;
		        // 同时把播放按钮改为.fa-play样式效果
		        $(".switch").addClass("fa-play").removeClass("fa-pause");
		      };
		      $(".bar").on("click", function(event) {
		        // 1. 获取单击的位置
		        var offset = event.offsetX;
		        // 2. 根据单击视频的播放位置计算要切换的时间
		        var current = offset / $(this).width() * video.duration;
		        // 3. 把计算后的时间赋值给currentTime
		        video.currentTime = current; 
		      });
		    });
	