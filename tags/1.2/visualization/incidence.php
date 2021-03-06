<?php
  $modelIndex = urldecode($_GET['index']); 

?>


<!--

   Copyright (C) 2011 University of Pittsburgh

   This file is part of Apollo.

   Apollo is free software: you can redistribute it and/or modify
   it under the terms of the GNU Lesser General Public License as
   published by the Free Software Foundation, either version 3 of
   the License, or (at your option) any later version.

   Apollo is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU Lesser General Public License for more details.

   You should have received a copy of the GNU Lesser General Public
   License along with Apollo.  If not, see <http://www.gnu.org/licenses/>.

-->

<!--
@author Yang Hu <yah14@pitt.edu>
-->


<script type="text/javascript" src="js/array.js"></script>

<script type="text/javascript">
    try{
        
        var webservice_result = $.parseJSON(dataExchange.model_urls['<?php print $modelIndex; ?>']);

        var url = webservice_result.incidence;

        document.getElementById("epi-curve-inc-<?php print $modelIndex; ?>").innerHTML="<img src='" + url + "' alt='' width=95% />";

        //        //chart data
        //        var data = new Array();
        //        var xAxis = new Array();
        //        var step = 1;
        //
        //        var maxLength = 0;
        //        //file in the chart data
        //        for ( var key in webservice_result.data) {
        //            if (!webservice_result.data.hasOwnProperty(key))
        //                continue;
        //            
        //            if (key != 'Newly Exposed')
        //                continue;
        //
        //            theData = webservice_result.data[key];
        //            //get the max length
        //            if (theData.length > maxLength)
        //                maxLength = theData.length;
        //
        //            theData = arrayHelper.resize(theData, step);
        //            //            theData = arrayHelper.addDates(theData, webservice_result.startDate);
        //            //console.log(key);
        //            data.push({
        //                name : key,
        //                data : theData
        //            });
        //        }
        //
        //        var index = 1;
        //        while (xAxis.length * step < maxLength){
        //            xAxis.push(index * step);
        //            index = index + 1;
        //        }
        //
        //        //get the x axis label
        //        var rowData = jqgridHelper.findDataByValue($(dataExchange.gridId), 'pname', 'Time Step Unit');
        //	
        //        if (rowData.length == 0)
        //            throw "Can't get Time Step Unit";
        //	
        //        var rawTG = rowData[0].value;
        //        var xLabel = rawTG.charAt(0).toUpperCase() + rawTG.slice(1) + 's';
        //        var hintLabel = rawTG.charAt(0).toUpperCase() + rawTG.slice(1) + ' ';
        //	
        //        var chart = new Highcharts.Chart({
        //            chart : {
        //                renderTo : 'epi-curve2',
        //                defaultSeriesType: 'line',
        //                marginBottom: 100,
        //                height: 500
        //            },
        //            
        //            xAxis: {
        //                //                type: 'datetime',
        //                labels: {
        //                    rotation: 90,
        //                    y: 13,
        //                    x: -5,
        //                    align: 'left',
        //                    style: {
        //                        font: 'normal 13px Verdana, sans-serif'
        //                    }
        //                }
        //                //                tickmarkPlacement:'between',
        //                //                dateTimeLabelFormats: {
        //                //                    second: '%Y-%m-%d<br/>%H:%M:%S',
        //                //                    minute: '%Y-%m-%d<br/>%H:%M',
        //                //                    hour: '%Y-%m-%d<br/>%H:%M',
        //                //                    day: '%b %e, %y',
        //                //                    week: '%b %e, %y',
        //                //                    month: '%b %e, %y',
        //                //                    year: '%y'
        //                //                }
        //            },
        //            
        //            yAxis: {
        //                min: 0,
        //                title: {
        //                    text: null
        //                }
        //                
        //            },
        //            
        //            tooltip: {
        //                formatter: function() {
        //                    return '<b>'+ this.series.name +'</b><br/>'+
        //                        hintLabel + this.x +': '+ this.y;
        //                }
        //            },
        //            
        //            //            navigator: {
        //            //                baseSeries: 0
        //            //            },
        //            //
        //            //            rangeSelector : {
        //            //                selected : 5
        //            //            },
        //
        //            title : {
        //                text : 'Incidence over time'
        //            },
        //			
        //            series : data,
        //            
        //            plotOptions : {
        //                line : {
        //                    animation: false
        //                },
        //                series: {
        //                    marker: {
        //                        enabled: false,
        //                        states: {
        //                            hover: {
        //                                enabled: true
        //                            }
        //                        },
        //                        symbol: 'circle',
        //                        radius: 2
        //                    }
        //                }
        //            }
        //        });


        
        //	var chart = new Highcharts.Chart({
        //		chart: {
        //			renderTo: 'epi-curve',
        //			defaultSeriesType: 'line',
        //			marginRight: 130,
        //			marginBottom: 80,
        //			height: 600,
        //			width: 950
        //		},
        //		title: {
        //			text: 'Epidemic Curve',
        //			x: -20 //center
        //		},
        //		subtitle: {
        //			text: 'Source: Apollo Webservice',
        //			x: -20
        //		},
        //		xAxis: {
        //			title : {
        //				margin: 30,
        //				text: xLabel
        //			},
        //	         labels: {
        //	            rotation: -90,
        //	            align: 'right',
        //	            style: {
        //	                font: 'normal 13px Verdana, sans-serif'
        //	           }
        //	        },
        //			categories: xAxis
        //		},
        //		yAxis: {
        //			title: {
        //				text: ''
        //			},
        //			plotLines: [{
        //				value: 0,
        //				width: 1,
        //				color: '#808080'
        //			}]
        //		},
        //		tooltip: {
        //			formatter: function() {
        //					return '<b>'+ this.series.name +'</b><br/>'+
        //					hintLabel + this.x +': '+ this.y;
        //			}
        //		},
        //		legend: {
        //			layout: 'vertical',
        //			align: 'right',
        //			verticalAlign: 'top',
        //			x: -10,
        //			y: 100,
        //			borderWidth: 0
        //		},
        //		series: data
        //	});
    }catch (err){
        alert(err);
    }
</script>
<div id="epi-curve-inc-<?php print $modelIndex; ?>"></div>
