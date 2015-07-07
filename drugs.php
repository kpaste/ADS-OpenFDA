<?php include 'head.php' ?>
<script type="text/javascript">$(document).ready(function(){ 
    if(window.innerWidth > 1000){var place=10}
    else{var place = 2}

    var chart = c3.generate({
        padding:{right:10},
        legend:{hide:true},

        data: {
            <?php include 'data/data1.php'; ?>
        },
        axis: {
            x: { 
                type: 'timeseries',
                culling:20,
                tick: {
                    format: '%Y - %m',
                    count:place,
                    culling:false
                }
            }
        },
        point: {
            r:0
        }
    });

    $('.rad1').click(function(){
        $('.view').hide();
        $('.view1').show();

        chart = c3.generate({
            data: {
                <?php include 'data/data1.php'; ?>
            },
            axis: {
                x: { 
                    type: 'timeseries',
                    culling:20,
                    tick: {
                        format: '%Y - %m',
                        count:place,
                        culling:false
                    }
                }
            },
            point: {
                r:0
            }
        });
    }); 

    $('.rad2').click(function(){
        $('.view').hide();
        $('.view2').show();

        chart = c3.generate({
            data: {
                <?php include 'data/data2.php'; ?>
            },
            axis: {
                x: { 
                    type: 'timeseries',
                    culling:20,
                    tick: {
                        format: '%Y - %m',
                        count:place,
                        culling:false
                    }
                }
            },
            point: {
                r:0
            }
        });
    }); 

    $('.rad3').click(function(){
        $('.view').hide();
        $('.view3').show();

        chart = c3.generate({
            data: {
                <?php include 'data/data3.php'; ?>
            },
            axis: {
                x: { 
                    type: 'timeseries',
                    culling:20,
                    tick: {
                        format: '%Y - %m',
                        count:place,
                        culling:false
                    }
                }
            },
            point: {
                r:0
            }
        });
    }); 

    $('.rad4').click(function(){
        $('.view').hide();
        $('.view4').show();

        chart = c3.generate({
            data: {
                <?php include 'data/data4.php'; ?>
            },
            axis: {
                x: { 
                    type: 'timeseries',
                    culling:20,
                    tick: {
                        format: '%Y - %m',
                        count:place,
                        culling:false
                    }
                }
            },
            point: {
                r:0
            }
        });
    }); 

    $('.run-query').click(function(){
        $('.view').hide();
        $('.view3').show();
        var searchVal = $('.in-one').val();
        var countVal = $('.in-two').val();
        $('.in-url').val('https://api.fda.gov/drug/event.json?search='+searchVal+'&count='+countVal);

        chart = c3.generate({
            data: {
                <?php include 'data/data3.php'; ?>
            },
            axis: {
                x: { 
                    type: 'timeseries',
                    culling:20,
                    tick: {
                        format: '%Y - %m',
                        count:place,
                        culling:false
                    }
                }
            },
            point: {
                r:0
            }
        });
    }); 
    
/*
tooltip: {
    format: {
        title: function (d) { return d; },
        value: function (value, ratio, id) {
            var format = id === 'data1' ? d3.format(',') : d3.format('');
            return format(value);
        }
},
}*/
});</script>
<div class='rapper'>
    <div class='left'>
        <div class='title'>DRUGS</div>
        <div class='left-nav adverse'>
            <span>Adverse events - <a href='ref.php'>Reference</a></span>
            <a class='chosen' href=''>Reports over time</a>
            <a href=''>Who reports?</a>
            <a href=''>Drugs Classes</a>
            <a href=''>Drug indications</a>
            <a href=''>Reported reactions</a>    
        </div>
        <div class='left-nav labeling'>
            <span>Labeling - <a href='ref.php'>Reference</a></span>
            <a href=''>Submissions over time</a>
            <a href=''>Routes of administration</a>
            <a href=''>Drug interactions</a>
        </div>
        <div class='left-nav enforcement'>
            <span>Enforcement reports - <a href='ref.php'>Reference</a></span>
            <a href=''>Enforcement reports over time</a>
            <a href=''>Who initiates?</a>
            <a href=''>Seriousness</a>
        </div>
    </div>

    <div class='right'>
        <div class='viz-title'>Adverse drugs event reports since 2004</div>
        <div class='viz-content'>
            This is the openFDA API endpoint for adverse drug events. An adverse event 
            is submitted to the FDA to report any undesirable experience associated with 
            the use of a drug, including serious drug side effects, product use errors, 
            product quality problems, and therapeutic failures.<br><br>
            Reporting of adverse events by healthcare professionals and consumers is 
            voluntary in the United States. Increases in the total number of adverse 
            events are likely caused by improved reporting. News, enforcement actions, 
            and other phenomena can also spur reporting.<br><br>
        </div>
        
        <div class='viz'><div id="chart"></div></div>
        <div class='filter'>
            <ul>
                <li><input class='rad1' checked type='radio' name='fil' value='all-adverse'> All adverse events reports</li>
                <li><input class='rad2' type='radio' name='fil' value='reported-through'> Reported through manufacturers</li>
                <li><input class='rad3' type='radio' name='fil' value='reported-directly'> Reported directly by public</li>
                <li><input class='rad4' type='radio' name='fil' value='where-indication'> Where use indication was hypertension</li>
                <br>
                <li class='view view1'>4,586,948 Records match these search parameters</li> 
                <li class='view view2 n'>4,298,190 Records match these search parameters</li> 
                <li class='view view3 n'>288,758 Records match these search parameters</li> 
                <li class='view view4 n'>4,586,948 Records match these search parameters</li> 
            </ul>
        </div>
        <div class='query-url'>URL</div>
        <input class='in-url' type='text' value='https://api.fda.gov/drug/event.json?search=receivedate:[20040101+TO+20130101]&count=receivedate'>
        
        <div class='left-sec'>
            <div class='param-tit'><span>search =</span> parameter</div>
            <input class='in-param in-one' type='text' value='receivedate:[20040101+TO+20130101]'>
        </div>

        <div class='right-sec'>
            <div class='param-tit'><span>count =</span> parameter</div>
            <input class='in-param in-two' type='text' value='receivedate'>
        </div>

        <div class='vj-wrap'>
            <!--<a href='https://api.fda.gov/drug/event.json?search=receivedate:[20040101+TO+20150101]&count=receivedate' class='view-json' target='_blank'>-->
            <a class='view-json'>
                View JSON
            </a>
            <a class='close'>
                Close
            </a>
        </div>

        <div class='rq-wrap'>
            <a class='run-query'>
                Run Query
            </a>
        </div>
<pre class="prettyprint">
    <?php include 'drugRef.php' ?>
</pre>

    </div>
</div>

<?php include 'foot.php' ?>

<script type='text/javascript'>$(document).ready(function(){ 
    $('.drugs').css('color','#005199');
    $('.drugs-li').css('background','#eaeaea');
    $('body').css('background','white');

    $('.view-json').click(function(){
        $('.prettyprint').slideDown();
        $('.view-json').hide();
        $('.close').css('display','inline-block');
    }); 

    $('.close').click(function(){
        $('.prettyprint').slideUp();
        $('.view-json').css('display','inline-block');
        $('.close').hide();
    }); 

    if(window.innerWidth > 1000)
    {
        var h = $('.right').height() + 10;
        $('.left').css('height', h);
    }

    $(window).on("resize", function () {
        var windowsize = $(this).width();
        if (windowsize > 840) {
            location.reload();
        } 
    });
});</script></body></html>
