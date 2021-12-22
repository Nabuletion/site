
<?php $__env->startSection('content'); ?>
        <div id="Pricing">
            <button>
                <a href="#Plans"> VIP Plans</a>
            </button>
        </div>

        <section id="Fball">
            <h4 class="hTitle">Today Football predictions</h4>
            <form id="dTable" class="dT">
                <select name="sLeague" onchange="showUser(this.value)">
                    <option value="">All Games</option>
                    <option value="0">England Games</option>
                    <option value="1">Spain Games</option>
                    <option value="2">Italy Games</option>
                    <option value="3">Germany Games</option>
                    <option value="4">France Games</option>
                    <option value="5">Netherlands Games</option>
                    <option value="6">Scottland Games</option>
                    <option value="7">China Games</option>
                </select>
            </form>
            <div class="tab">
                <button class="tablinks" onclick="openType(event, 'load1X2')" id="defaultOpen">1 X 2</button>
                <button class="tablinks" onclick="openType(event, 'loadOver2')">Over 2.5</button>
                <button class="tablinks" onclick="openType(event, 'loadGG')">GG & <br>Over 2.5</button>
                <button class="tablinks" onclick="openType(event, 'loadOver1')">Over 1.5</button>
                <button class="tablinks" onclick="openType(event, 'loadHtft')">HT/FT</button>
            </div>
        </section>

        <section>
            <div id="load1X2" class="tabcontent">
                <section class="LLoogs">
                    <h2>1X2 Predictions</h2>
                    <table border="1">
                        <thead>
                            <th>Time</th>
                            <th>Teams</th>
                            <th>Prediction</th>
                            <th>Results</th>
                        </thead>
                        <tbody>
                            <p id="txtHint1">Table here</p>
                        </tbody>
                    </table>
                </section>
                <p></p>1X2 tab</p>
            </div>
            <div id="loadOver2" class="tabcontent">
                <section class="LLoogs">
                    <h2>Over 2.5 Predictions</h2>
                    <table border="1">
                        <thead>
                            <th>Time</th>
                            <th>Teams</th>
                            <th>Results</th>
                        </thead>
                        <tbody id="txtHint2"></tbody>
                    </table>
                </section>
                <p></p>Over 2.5 tab</p>
            </div>
            <div id="loadGG" class="tabcontent">
                <section class="LLoogs">
                    <h2>GG & Over 2.5 Predictions</h2>
                    <table border="1">
                        <thead>
                            <th>Time</th>
                            <th>Teams</th>
                            <th>Results</th>
                        </thead>
                        <tbody id="txtHint3"></tbody>
                    </table>
                </section>
                <p></p>GG & Over 2.5 tab</p>
            </div>
            <div id="loadOver1" class="tabcontent">
                <section class="LLoogs">
                    <h2>Over 1.5 Predictions</h2>
                    <table border="1">
                        <thead>
                            <th>Time</th>
                            <th>Teams</th>
                            <th>Results</th>
                        </thead>
                        <tbody id="txtHint4"></tbody>
                    </table>
                </section>
                <p></p>Over 1.5 tab</p>
            </div>
            <div id="loadHtft" class="tabcontent">
                <section class="LLoogs">
                    <h2>HT/FT Predictions</h2>
                    <table border="1">
                        <thead>
                            <th>Time</th>
                            <th>Teams</th>
                            <th>Prediction</th>
                            <th>Results</th>
                        </thead>
                        <tbody id="txtHint5"></tbody>
                    </table>
                </section>
                <p></p>Ht/Ft tab</p>
            </div>
        </section>

        <section>
            <h4 class="hTitle">Latest prediction winning</h4>
            <table border="1">
                <thead>
                    <th>Date</th>
                    <th>Teams</th>
                    <th>Prediction</th>
                    <th>Results</th>
                </thead>
                <tr>
                    <td> 9 Aug</td>
                    <td>Manchester united v/s Chelsea</td>
                    <td class="Pre">over 2.5</td>
                    <td>3 : 0</td>
                </tr>
                <tr>
                    <td>0800</td>
                    <td>Manchester united v/s Chelsea</td>
                    <td class="Pre">X</td>
                    <td>3 : 0</td>
                </tr>
                <tr>
                    <td>0800</td>
                    <td>Manchester united v/s Chelsea</td>
                    <td class="Pre"> 1 </td>
                    <td>3 : 0</td>
                </tr>
                <tr>
                    <td>0800</td>
                    <td>Manchester united v/s Chelsea</td>
                    <td class="Pre">2 </td>
                    <td>3 : 0</td>
                </tr>
            </table>
        </section>
    
        <div class="balk">
            <marquee class="Tel" behavior="" direction="left"><b>Join our telegram channel <i class="fa fa-hand-o-down"></i> <i class="fa fa-hand-o-down"> <i class="fa fa-hand-o-down"></i></b></marquee>
            <h5 id="tel"><a href="https://t.me/johekaclassictips2020channel"><i class="fa fa-telegram">Telegram</i></a></h5>
        </div>

        <section id="abt">
            <h3><em>JOHEKA CLASSIC TIPS</em></h3>
            <p>Joheka classic tips International, free predictions, previews for main and minor football leagues update everyday. Check out all our winning <em>1X2</em> betting tips for today<br> Joheka classic tips is always up-to-date, it provides mathematical
                football predictions generated by computer algorithm on the basisof statistics.</p>
            <p>We offer daily match betting previews and analysis for every major or minor league around the world.<br>Whether you want predictions for today, tommorrow or any day of the week, we have you covered</p>
            <p>You can contact me on
                <a href="https://api.whatsapp.com/send?phone=254759306980"> WhatsApp</a> and don't foget to join our <a href="https://t.me/johekaclassictips2020channel">Telegram channel</a></p>
            <!--href="whatsapp:contact=015555555555@s.whatsapp.com&message="I'd like to chat with you about "-->
        </section>
    
        <h3 id="Plans">VIP Packages Plan</h3>
        <section class="BPlan">
            <div class="Plan">
                <h3><u>Gold VIP Plan (2+ ODDs)</u></h3>
                <p>We shall be providing strictly 2.0+ odds in this channel, with a higher win rate to double our clients stake.</p>
                <p>Kshs 3000/=(30$)</p>
                <button onclick="window.open('http://tryapp.epizy.com/P6Reg.php','_self');">Join Gold VIP Plan</button>
            </div>
            <div class="Plan">
                <h3><u>Platinum Plan (10+ to 25+ ODDs)</u></h3>
                <p>We shall be provinding with 10+ to 25+ odds single ticket everyday.<br> WIN Rate: 99%</p>
                <p>Kshs 2,500/=(25$)</p>
                <button onclick="Platuinum();">Join Platinum Plan</button>
            </div>
            <div class="Plan">
                <h3><u>Diamond Plan (1.30+ Bankers)</u></h3>
                <p>We shall be providing with 1.30+ single ticket daily<br> Target 3M in 21 days<br> WIN rate: 100%</p>
                <p>Kshs 2,200/=(20$)</p>
                <button onclick="Diamond();">Join Diamond Plan</button>
            </div>
            <div class="Plan">
                <h3><u>Silver Plan (1.50+ ODDs)</u></h3>
                <p>We shall be providing 1.50+ odds single ticket daily for 15 day<br> Our main target to hit is 1M </p>
                <p>Kshs 1800/=(18$)</p>
                <button onclick="Silver();">Join Silver Plan</button>
            </div>
        </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('siteLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\fisrt\resources\views/main.blade.php ENDPATH**/ ?>