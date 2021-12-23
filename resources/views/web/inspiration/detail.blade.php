@extends('web/components/layout.index')
@section('header')
    <menu>
        <a href="{{route('home')}}">
            <img src="{{asset('images/kreteworld 1.png')}}" width="276px" alt="" srcset="">
        </a>
        <div id="menu-hamburger">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </menu>
@endsection
@section('main')
    <main page="inspiration">
        <section class="section__first">
            <h2>INSPIRATIONS</h2>
            <span class="date forMobile">02 November 2021</span>
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-lg-6">
                        <img class="ins-img" src="{{asset('images/foto1.png')}}" width="400px"/>
                        <div class="forMobile box_title">
                            <h3>CHOOSE YOUR CIGS BY YOUR CHARACTER</h3>
                            <span class="minutes">3 minutes reading</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content-detail">
                            <span class="forDesktop minutes">3 minutes reading</span>
                            <h2 class="forDesktop">CHOOSE YOUR CIGS BY YOUR CHARACTER</h2>
                            <span class="forDesktop date">02 November 2021</span>
                            <p>Cigars, Cigarillos, and Cigarettes: What’s the difference? There are three words that we used to hear when we are talking about tobacco products, which are cigarette, cigar, and cigarillo. Those three words almost sound alike but totally different in shape and what’s inside. There are differences between the three kinds of smokes, such as in their physical, cultural, and how they are enjoyed. The physical difference is the sizes where cigars usually pretty much thicker than cigarettes, and cigarillos are the smallest among the three. A cigar and cigarillos are made from tobacco and a cigarette will be made from shredded tobacco leaf, leaf steams, or other tobacco by products. A cigarette will be the simplest because you can simply lit them and smoke them quickly, but it’s not for a cigar and cigarillo which need more steps to be ready to be smoked. The tobacco and nicotine levels in them are stronger and even too strong to be inhaled. Their ingredients are also quite different, where a cigar and cigarillos are made from tobacco and a cigarette will be made from shredded tobacco leaf, leaf steams, or other tobacco by products. Another physical difference is at their wrapping material where a cigarillo would be rolled in their real tobacco leaf, and a cigarette is rolled in a white thermal paper that is not based on tobacco. The differences also can be found in how the three kinds of smokes enjoyed. A cigarette will be the simplest because you can simply lit them and smoke them quickly, but it’s not for a cigar and cigarillo which need more steps to be ready to smoked and inhaled slowly as the tobacco and nicotine levels in them are stronger and even too strong to be inhaled. Another differences is from their filters where a cigar and cigarillo don’t have filters because they don’t have the additives in the tobacco unlike cigarettes. So, which of those three that most identified with you? Tell us more.</p>
                            <p>Hand-rolled to machine-rolled cigarette In the 1850s, the use of hand-rolled cigarette in Europe began to increase. This is caused by the outbreak of the Crimean War and the increase was mostly among the armed forces. They felt a bit inconvenient using a pipe and the smoking only can be done at certain places. They prefer to follow the example of the Turkish and Russian soldiers who use cigarette paper or newspapers to roll their tobacco, because this is more practical than using the pipe. The World War I & II made the need of cigarettes increased as the sedative for the soldiers. Until the 1859s, there was the first hand-rolled cigarette brand that actually sell them, but as the time goes by the production couldn’t match the need of cigarette in the market. Therefore in the 1875, there was a competition to make a machine to roll the cigarette and this changed the cigarette industry in the world. The high price due to the scarcity of goods is slowly decreasing and many competitors in the cigarette industry began to come up so that there was no market monopoly. In the 1850s, the use of hand-rolled cigarette in Europe began to increase. This is caused by the outbreak of the Crimean War and the increase was mostly among the armed forces. The inconvenient of using the smoking pipe made them prefer to follow the Turkish and Russian Soldier who use cigarette paper or newspapers to roll their tobacco. Until the 1859s, there was the first hand-rolled cigarette brand and as the time goes by, the production couldn’t match the need of cigarette in the market. Therefore in the 1875, there was a competition to make a machine to roll the cigarette and this changed the cigarette industry in the world.</p>
                            <p>Why do clove cigarettes crackle? What was the first thing you noticed when you were trying clove cigarette for the first time? Was it the taste, the scent, or the crackling noise that came out with the fire? Whichever your answer is, everything is understandable. The taste of this tobacco sticks with clove dominantly different and unique compare to others. The scent also makes people across your table wonder, “what is that thing he is smoking?” but almost every one would be really curious on how on earth is this little thing could make the noise that sounds like a burning wood in the campfire just by a cigarette in his heand. Lucky for you, we have your answer here. The crackling sound that you hear comes from the chemical reaction of cloves when they pop and burn with each inhalation. The bigger the fire gets when you inhale it, the bolder the sound it makes. This is more or less similar to the campfire where the gases from the burning woods trying to escape to the air. From where it is originated, Indonesia, this crackling noise sounds like “kretek” in the ears of the villagers, that way, this cigarette earned its name in the local by the word “kretek.” The name itself differentiate this kind of cigarettes and regular kinds. Here is how you should pronounce the word “kretek” in a local way. It rhymes with the word piggyback or track. Or if you are French, you may pronounce this word almost similar to the beautiful name of a lady which is Hélène.
                            </p>
                        </div>
                        <div class="btn-wrapper">                        
                            <button id="copy" class="btn-djarum btn-blue-djarum btn-copy forMobile-dflex" href="{{route('kretek')}}"><img class="me-3" src="{{asset('images/copy.svg')}}" width="20px" />COPY TO CLIPBOARD</button>
                            <a class="btn-djarum btn-red-djarum forMobile-dflex" href="{{route('inspiration')}}">SEE ALL ARTICLES</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('script')
    <script>
        $( document ).ready(function() {
            function copyClipboard(params) {
                let url = location.href
                var copyText = document.getElementById("copy");
                /* Select the text field */

                /* Copy the text inside the text field */
                navigator.clipboard.writeText(url);
            }

             $('.btn-copy').on('click',function (params) {
                copyClipboard()
                console.log('test');
             })
        });
    </script>
@endsection