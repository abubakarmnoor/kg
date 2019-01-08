!function(t,e,a){"use strict";t.Calendario=function(e,a){this.$el=t(a),this._init(e)},t.Calendario.defaults={weeks:["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],weekabbrs:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],months:["January","February","March","April","May","June","July","August","September","October","November","December"],monthabbrs:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],displayWeekAbbr:!1,displayMonthAbbr:!1,startIn:1,events:"click",fillEmpty:!0,feedParser:"./feed/",zone:"00:00",checkUpdate:!0},t.Calendario.prototype={_init:function(e){this.VERSION="3.2.0",this.UNIQUE="%{unique}%",this.options=t.extend(!0,{},t.Calendario.defaults,e),this.today=new Date,this.month=isNaN(this.options.month)||null===this.options.month?this.today.getMonth():this.options.month-1,this.year=isNaN(this.options.year)||null===this.options.year?this.today.getFullYear():this.options.year,this.caldata=this._processCaldata(this.options.caldata),parseFloat(t().jquery)>=1.9&&this.options.events.indexOf("hover")!=-1&&this.logError("'hover' psuedo-name is not supported in jQuery 1.9+. Use 'mouseenter' 'mouseleave' events instead."),this.options.events=this.options.events.split(","),this.options.zone="+"!=this.options.zone.charAt(0)&&"-"!=this.options.zone.charAt(0)?"+"+this.options.zone:this.options.zone,this._generateTemplate(!0),this._initEvents()},_processCaldataObj:function(e,i){if("object"!=typeof e&&(e={content:e,startTime:"00:00",endTime:"23:59",allDay:!0}),e.content||this.logError("Content is missing in date "+i),e.startTime&&!e.endTime&&(e.endTime=parseInt(e.startTime.split(":")[0])+1+":"+e.startTime.split(":")[1]),e.startTime||e.endTime||(e=t.extend({},e,{startTime:"00:00",endTime:"23:59",allDay:!0})),e.startTime&&e.endTime&&e.allDay===a&&(e.allDay=!1),/^\d{2}-DD-\d{4}/.test(i)||/^\d{2}-DD-YYYY/.test(i)){var s,n=/^(\d{2})-DD-(\d{4})/.exec(i)||/^(\d{2})-DD-YYYY/.exec(i);3==n.length?s=new Date(n[2],n[1],0):2==n.length&&(s=new Date(this.year,n[1],0)),e.startDate||(e.startDate=1),e.endDate||1==s.getDate()||(e.endDate=s.getDate()),e.endDate||1!=s.getDate()||3!=n.length||(e.endDate=s.getDate())}return e},_processCaldata:function(e){var a=this;return e=e||{},t.each(e,function(i,s){/^\d{2}-\d{2}-\d{4}/.test(i)||/^\d{2}-\d{2}-YYYY/.test(i)||/^\d{2}-DD-YYYY/.test(i)||/^MM-\d{2}-YYYY/.test(i)||/^\d{2}-DD-YYYY/.test(i)||/^MM-\d{2}-\d{4}/.test(i)||/^\d{2}-DD-\d{4}/.test(i)||"TODAY"==i||a.logError(i+" is an Invalid Date. Date should not contain spaces, should be separated by '-' and should be in the format 'MM-DD-YYYY'. That ain't that difficult!"),Array.isArray(s)?(t.each(s,function(t,e){s[t]=a._processCaldataObj(e,i)}),e[i]=s):e[i]=a._processCaldataObj(s,i)}),e},_propDate:function(e,a){var i=e.index(),s={allDay:[],content:[],endTime:[],startTime:[]},n={day:e.children("span.fc-date").text(),month:this.month+1,monthname:this.options.displayMonthAbbr?this.options.monthabbrs[this.month]:this.options.months[this.month],year:this.year,weekday:i+this.options.startIn,weekdayname:this.options.weeks[6==i?0:i+this.options.startIn]};e.children("div.fc-calendar-events").children("div.fc-calendar-event").each(function(e,a){var i=t("<div>"+t(a).html()+"</div>");s.startTime[e]=new Date(i.find("time.fc-starttime").attr("datetime")),s.endTime[e]=new Date(i.find("time.fc-endtime").attr("datetime")),s.allDay[e]="true"===i.find("time.fc-allday").attr("datetime"),i.find("time").remove(),s.content[e]=i.html()}),n.day&&this.options[a](e,s,n)},_initEvents:function(){for(var e=this,i=[],s=[],n=0;n<e.options.events.length;n++)i[n]=e.options.events[n].toLowerCase().trim(),s[n]="onDay"+i[n].charAt(0).toUpperCase()+i[n].slice(1),this.options[s[n]]===a&&(this.options[s[n]]=function(t,e,a){return!1}),this.$el.on(i[n]+".calendario","div.fc-row > div",function(a){"mouseenter"!=a.type&&"mouseleave"!=a.type||(a.type=t.inArray(a.type,i)==-1?"hover":a.type),e._propDate(t(this),s[t.inArray(a.type,i)])});this.$el.delay(new Date(this.today.getFullYear(),this.today.getMonth(),this.today.getDate()+1,0,0,0)-(new Date).getTime()).queue(function(){e.today=new Date,e.today.getMonth()!=e.month&&e.today.getMonth()+1!=e.month||e._generateTemplate(!0),e.$el.trigger(t.Event("newday.calendar.calendario"))})},_generateTemplate:function(e,a){var i,s=this._getHead(),n=this._getBody();switch(this.rowTotal){case 4:i="fc-four-rows";break;case 5:i="fc-five-rows";break;case 6:i="fc-six-rows"}this.$cal=t('<div class="fc-calendar '+i+'">').append(s,n),this.$el.find("div.fc-calendar").remove().end().append(this.$cal),this.$el.find(".fc-emptydate").parent().css({background:"transparent",cursor:"default"}),e||this.$el.trigger(t.Event("shown.calendario")),a&&a.call()},_getHead:function(){for(var t='<div class="fc-head">',e=0;e<=6;e++){var a=e+this.options.startIn,i=a>6?a-6-1:a;t+="<div>"+(this.options.displayWeekAbbr?this.options.weekabbrs[i]:this.options.weeks[i])+"</div>"}return t+"</div>"},_parseDataToDay:function(t,e,a){var i="";if(a){Array.isArray(t)||(t=[t]);for(var s=0;s<t.length;s++)1!=this.month&&e>=t[s].startDate&&e<=t[s].endDate?i+=this._wrapDay(t[s],e,!0):1==this.month&&e>=t[s].startDate&&(t[s].endDate&&e<=t[s].endDate?i+=this._wrapDay(t[s],e,!0):t[s].endDate||(i+=this._wrapDay(t[s],e,!0)))}else i=Array.isArray(t)?this._convertDayArray(t,e):this._wrapDay(t,e,!0);return i},_toDateTime:function(t,e,a){var i=parseInt(this.options.zone.split(":")[0]),s=parseInt(this.options.zone.charAt(0)+this.options.zone.split(":")[1]),n=parseInt(t.split(":")[0])-i,o=parseInt(t.split(":")[1])-s,r=new Date(Date.UTC(this.year,this.month,e,n,o,0,0));if(a){var h=parseInt(a.split(":")[0])-i,d=parseInt(a.split(":")[1])-s;r.getTime()-new Date(Date.UTC(this.year,this.month,e,h,d,0,0)).getTime()<0&&(r=new Date(Date.UTC(this.year,this.month,e+1,n,o,0,0)))}return r.toISOString()},_timeHtml:function(t,e){var a=t.content;return a+='<time class="fc-allday" datetime="'+t.allDay+'"></time>',a+='<time class="fc-starttime" datetime="'+this._toDateTime(t.startTime,e)+'">'+t.startTime+"</time>",a+='<time class="fc-endtime" datetime="'+this._toDateTime(t.endTime,e,t.startTime)+'">'+t.endTime+"</time>"},_wrapDay:function(t,e,a){return e?a?'<div class="fc-calendar-event">'+this._timeHtml(t,e)+"</div>":this._timeHtml(t,e):'<div class="fc-calendar-event">'+t+"</div>"},_convertDayArray:function(t,e){for(var a=[],i=0;i<t.length;i++)a[i]=this._wrapDay(t[i],e,!1);return this._wrapDay(a.join('</div><div class="fc-calendar-event">'))},_getBody:function(){var t=new Date(this.year,this.month+1,0),e=t.getDate(),a=new Date(this.year,t.getMonth(),1),i=new Date(this.year,this.month,0).getDate();this.startingDay=a.getDay();for(var s='<div class="fc-body"><div class="fc-row">',n=1,o=0;o<7;o++){for(var r=0;r<=6;r++){var h=this.startingDay-this.options.startIn,d=h<0?6+h+1:h,c="",l=this.month===this.today.getMonth()&&this.year===this.today.getFullYear()&&n===this.today.getDate(),p=this.year<this.today.getFullYear()||this.month<this.today.getMonth()&&this.year===this.today.getFullYear()||this.month===this.today.getMonth()&&this.year===this.today.getFullYear()&&n<this.today.getDate(),y="";if(this.options.fillEmpty&&(r<d||o>0)&&(n>e?(c='<span class="fc-date fc-emptydate">'+(n-e)+'</span><span class="fc-weekday">',++n):1==n&&(c='<span class="fc-date fc-emptydate">'+(i-d+1)+'</span><span class="fc-weekday">',++i),c+=this.options.weekabbrs[r+this.options.startIn>6?r+this.options.startIn-6-1:r+this.options.startIn]+"</span>"),n<=e&&(o>0||r>=d)){c='<span class="fc-date">'+n+'</span><span class="fc-weekday">'+this.options.weekabbrs[r+this.options.startIn>6?r+this.options.startIn-6-1:r+this.options.startIn]+"</span>";var m=(this.month+1<10?"0"+(this.month+1):this.month+1)+"-"+(n<10?"0"+n:n)+"-"+this.year,f=this.caldata[m],u=(this.month+1<10?"0"+(this.month+1):this.month+1)+"-"+(n<10?"0"+n:n)+"-YYYY",D=this.caldata[u],v="MM-"+(n<10?"0"+n:n)+"-"+this.year,g=this.caldata[v],T="MM-"+(n<10?"0"+n:n)+"-YYYY",w=this.caldata[T],Y=(this.month+1<10?"0"+(this.month+1):this.month+1)+"-DD-"+this.year,_=this.caldata[Y],b=(this.month+1<10?"0"+(this.month+1):this.month+1)+"-DD-YYYY",M=this.caldata[b];l&&this.caldata.TODAY&&(y+=this._parseDataToDay(this.caldata.TODAY,n)),f&&(y+=this._parseDataToDay(f,n)),g&&(y+=this._parseDataToDay(g,n)),_&&(y+=this._parseDataToDay(_,n,!0)),M&&(y+=this._parseDataToDay(M,n,!0)),w&&(y+=this._parseDataToDay(w,n)),D&&(y+=this._parseDataToDay(D,n)),""!==y&&(c+='<div class="fc-calendar-events">'+y+"</div>"),++n}else l=!1;var A=l?"fc-today ":"";A+=p?"fc-past ":"fc-future ",""!==y&&(A+="fc-content"),s+=(""!==A?'<div class="'+A.trim()+'">':"<div>")+c+"</div>"}if(n>e){this.rowTotal=o+1;break}s+='</div><div class="fc-row">'}return s+"</div></div>"},_move:function(t,e,a){"previous"===e?"month"===t?(this.year=this.month>0?this.year:--this.year,this.month=this.month>0?--this.month:11):"year"===t&&(this.year=--this.year):"next"===e&&("month"===t?(this.year=this.month<11?this.year:++this.year,this.month=this.month<11?++this.month:0):"year"===t&&(this.year=++this.year)),this._generateTemplate(!1,a)},option:function(t,e){return e?void(this.options[t]=e):this.options[t]},getYear:function(){return this.year},getMonth:function(){return this.month+1},getMonthName:function(){return this.options.displayMonthAbbr?this.options.monthabbrs[this.month]:this.options.months[this.month]},getCell:function(t){var e=Math.floor((t+this.startingDay-this.options.startIn-1)/7),a=t+this.startingDay-this.options.startIn-7*e-1;return this.$cal.find("div.fc-body").children("div.fc-row").eq(e).children("div").eq(a)},setData:function(e,a){e=this._processCaldata(e),a?this.caldata=e:t.extend(this.caldata,e),this._generateTemplate(!1)},gotoNow:function(t){this.month=this.today.getMonth(),this.year=this.today.getFullYear(),this._generateTemplate(!1,t)},gotoMonth:function(t,e,a){this.month=t-1,this.year=e,this._generateTemplate(!1,a)},gotoPreviousMonth:function(t){this._move("month","previous",t)},gotoPreviousYear:function(t){this._move("year","previous",t)},gotoNextMonth:function(t){this._move("month","next",t)},gotoNextYear:function(t){this._move("year","next",t)},feed:function(e){var a=this;t.post(a.options.feedParser,{dates:this.caldata}).always(function(t){e&&e.call(this,JSON.parse(t).hevent)})},version:function(){return this.VERSION}};var i=function(t){throw new Error(t)};t.fn.calendario=function(e){var a=t.data(this,"calendario");if("string"==typeof e){var s=Array.prototype.slice.call(arguments,1);this.each(function(){return a?(t.isFunction(a[e])&&"_"!==e.charAt(0)||i("No such method '"+e+"' for calendario instance."),void a[e].apply(a,s)):void i("Cannot call methods on calendario prior to initialization; Attempted to call method '"+e+"'")})}else this.each(function(){a?a._init():a=t.data(this,"calendario",new t.Calendario(e,this))});return a.$el.trigger(t.Event("shown.calendar.calendario"),[a]),a}}(jQuery,window);