<?php include 'head.php' ?>
<div class='left'>
    <div class='title'>DRUGS</div>
    <div class='left-nav adverse'>
        <span>Adverse events - (<a href=''>REFERENCE</a>)</span>
        <a class='chosen' href=''>Reports over time</a>
        <a href=''>Who reports?</a>
        <a href=''>Drugs Classes</a>
        <a href=''>Drug indications</a>
        <a href=''>Reported reactions</a>    
    </div>
    <div class='left-nav labeling'>
        <span>Labeling - (<a href=''>REFERENCE</a>)</span>
        <a href=''>Submissions over time</a>
        <a href=''>Routes of administration</a>
        <a href=''>Drug interactions</a>
    </div>
    <div class='left-nav enforcement'>
        <span>Enforcement reports - (<a href=''>REFERENCE</a>)</span>
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
    
    <div class='viz'>Visualization</div>
    <input class='in-url' type='text' value='https://api.fda.gov/drug/event.json?search=receivedate:[20040101+TO+20150101]&count=receivedate'>
    <input class='in-param in-one' type='text' value='receivedate:[20040101+TO+20150101]'>
    <input class='in-param in-two' type='text' value='receivedate'>
    <div class='vj-wrap'>
        <a href='https://api.fda.gov/drug/event.json?search=receivedate:[20040101+TO+20150101]&count=receivedate' class='view-json' target='_blank'>
            View JSON
        </a>
    </div>

    <div class='rq-wrap'>
        <a class='run-query'>
            Run Query
        </a>
    </div>

</div>

<script type='text/javascript'>$(document).ready(function(){ 
    $('.drugs').css('color','#191919')
});</script></body></html>
