"use strict";document.addEventListener("DOMContentLoaded",function(){setTimeout(function(){var t={series:[30],chart:{height:150,type:"radialBar"},plotOptions:{radialBar:{hollow:{margin:0,size:"60%",background:"transparent",imageOffsetX:0,imageOffsetY:0,position:"front"},track:{background:"#4680FF50",strokeWidth:"50%"},dataLabels:{show:!0,name:{show:!1},value:{formatter:function(t){return parseInt(t)},offsetY:7,color:"#4680FF",fontSize:"20px",fontWeight:"700",show:!0}}}},colors:["#4680FF"],fill:{type:"solid"},stroke:{lineCap:"round"}};new ApexCharts(document.querySelector("#total-earning-graph-1"),t).render()},500)});