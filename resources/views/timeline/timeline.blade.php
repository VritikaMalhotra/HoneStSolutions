<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.timeline {
	 display: flex;
	 margin: 0 auto;
	 flex-wrap: wrap;
	 flex-direction: column;
	 max-width: 700px;
	 position: relative;
}
 .timeline__content-title {
	 font-weight: normal;
	 font-size: 15px;
	 margin: -10px 0 0 0;!important
	 transition: 0.4s;
	 padding: 0 10px;
	 box-sizing: border-box;
	 color: #fff;
      background-color: black;
    position: relative;
    opacity: 0.8;
}
 .timeline__content-desc {
	 margin: 0;
	 font-size: 18px;
	 box-sizing: border-box;
	 color: #fff;
	 font-weight: normal;
	 line-height: 25px;
}
 .timeline:before {
	 position: absolute;
	 left: 50%;
	 width: 2px;
	 height: 100%;
	 margin-left: -1px;
	 content: "";
	 background: rgba(255, 255, 255, .07);
}
 @media responsive() {
	 .timeline:before {
		 left: 40px;
	}
}
 .timeline-item {
	 padding: 40px 0;
	 opacity: 0.3;
	 filter: blur(2px);
	 transition: 0.5s;
	 box-sizing: border-box;
	 width: calc(50% - 40px);
	 display: flex;
	 position: relative;
	 transform: translateY(-80px);
}
 .timeline-item:before {
	 content: attr(data-text);
	 letter-spacing: 3px;
	 width: 100%;
	 position: absolute;
	 color: #fff;
	 font-size: 20px;
	 border-left: 2px solid rgba(255, 255, 255, .5);
	 top: 70%;
	 margin-top: -5px;
	 padding-left: 15px;
	 opacity: 0;
	 right: calc(-100% - 56px);
}
 .timeline-item:nth-child(even) {
	 align-self: flex-end;
}
 .timeline-item:nth-child(even):before {
	 right: auto;
	 text-align: right;
	 left: calc(-100% - 56px);
	 padding-left: 0;
	 border-left: none;
	 border-right: 2px solid rgba(255, 255, 255, .5);
	 padding-right: 15px;
}
 .timeline-item--active {
	 opacity: 1;
	 transform: translateY(0);
	 filter: blur(0px);
}
 .timeline-item--active:before {
	 top: 50%;
	 transition: 0.3s all 0.2s;
	 opacity: 1;
	 margin: -38px 0 15px 0;
}
 .timeline-item--active .timeline__content-title {
	 margin: -33px 0 15px 0;
}
@media only screen and (max-width: 600px) {
	 .timeline-item {
		 align-self: baseline !important;
		 width: 100%;
		 padding: 0 30px 150px 80px;
	}
	 .timeline-item:before {
		 left: 10px !important;
		 padding: 0 !important;
		 top: 50px;
		 text-align: center !important;
		 width: 60px;
		 border: none !important;
	}
	 .timeline-item:last-child {
		 padding-bottom: 40px;
	}
}
 .timeline__img {
	 max-width: 100%;
	 box-shadow: 0 10px 15px rgba(0, 0, 0, .4);
}
 .timeline-container {
	 width: 100%;
	 position: relative;
	 padding: 80px 0;
	 transition: 0.3s ease 0s;
	 background-attachment: fixed;
	 background-size: cover;
}
 .timeline-container:before {
	 position: absolute;
	 left: 0;
	 top: 0;
	 width: 100%;
	 height: 100%;
	 background: rgba(99, 99, 99, 0.8);
	 content: "";
}
 .timeline-header {
	 width: 100%;
	 text-align: center;
	 margin-bottom: 80px;
	 position: relative;
}
 .timeline-header__title {
	 color: #fff;
	 font-size: 46px;
	 font-weight: normal;
	 margin: 0;
}
 .timeline-header__subtitle {
	 color: rgba(255, 255, 255, .5);
	 font-size: 16px;
	 letter-spacing: 5px;
	 margin: 10px 0 0 0;
	 font-weight: normal;
}
 
    </style>
</head>
<body>
    <div class="timeline-container" id="timeline-1">
        <div class="timeline-header">
            <h2 class="timeline-header__title">Our Journey</h2>
            <h3 class="timeline-header__subtitle"></h3>
        </div>
        <div class="timeline">
            <div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/Apple21-10-2018.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>21-10-2018,08-12-2018</h2>
                    <p class="timeline__content-desc"><b>Apple Inc.</b><br>Our two sessions of "Discover the Arjuna in You" were held with the employees of Apple, West India Zone comprising employees from Gujarat, Maharastra and MP .</p>
                </div>
            </div>
            <div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/booklaunch.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>06-01-2019</h2>
                    <p class="timeline__content-desc"><b>Book Launch, 'The Corporate Bhagavad Gita - Discover The Arjuna in You'</b><br>The first book of Prasun Kundu - "The Corporate Bhagavad Gita - Discover the Arjuna in You" was unveiled in The World Book Fair, Pragati Maidan, New Delhi on 6th January 2019. The book is widely accepted by all sections of people in India and across the world. The book is available on:
					Amazon -  <a href="https://lnkd.in/fZBSMcf">https://lnkd.in/fZBSMcf</a>
					Flipkart - <a href="https://lnkd.in/f6KqsDv">https://lnkd.in/f6KqsDv</a></p>
                </div>
            </div>
            
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/mythiopia17-02-2019.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>17-02-2019</h2>
                    <p class="timeline__content-desc"><b>Mythopia</b><br>A talk based on the book " The Corporate Bhagavad Gita - Discover the Arjuna in You" was held in Mumbai in association with Mythopia, an organisation promoting ancient wisdom/ mythology. It was an informative audience and many of the participants took signed copies of the book .</p>
                </div>
            </div>
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/Reliance8-03-2019.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>08-03-2019</h2>
                    <p class="timeline__content-desc"><b>Reliance Retail</b><br>A two hours Session  at the Ahmedabad office of Reliance Retail on the occasion of International Women's day. The title of the session was "Discover the Arjuna in you" which was aimed at enhancing the Organisational productivity by increasing productivity of people through powerful teachings of the Bhagavad Gita. We engaged the audience. We addressed a group of 40 people, which included 10 women. It was an interactive session . At the end of the session many of the participants took signed copies of the book " The Corporate Bhagavad Gita - Discover the Arjuna in You".</p>
                </div>
            </div>
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/booksclubandbliss23-04-2019.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>23-04-2019</h2>
                    <p class="timeline__content-desc"><b>Books & Bliss Club</b><br>Books and Bliss club in collaboration with "Atrangi Community" and American Corner Library held an author meetup with Prasun Kundu, Author of The Corporate Bhagavad Gita. We engaged the audience with a brief about the book and how Bhagavad Gita can help us lead a life full of happiness. At the end of the session many of the participants took signed copies of the book " The Corporate Bhagavad Gita - Discover the Arjuna in You"</p>
                </div>
            </div>
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/ama24-05-2019.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>24-05-2019</h2>
                    <p class="timeline__content-desc"><b>Ahmedabad Management Association</b><br>Discover the Arjuna in You was held at the Seminar hall of the Ahmedabad Management Association (AMA). More than 200 people attended the session which ended with an interactive Q & A session. Many of the participants bought signed copies of the book " The Corporate Bhagvad Gita - Discover the Arjuna in You".Check out the full talk @ the below link. 
	<a href="https://youtu.be/68fLyFiaDoM">https://youtu.be/68fLyFiaDoM</a></p>
                </div>
            </div>
            <div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/calorx26-06-2019.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>26-06-2019</h2>
                    <p class="timeline__content-desc"><b>Calorx Public School</b><br>Importance of focusing on goals through the teachings of the Bhagavad Gita. The students were motivated to read, understand imbibe and implement the teachings of Bhagavad Gita in their daily lives to enrich living in pursuit to happiness! Two copies of " The Corporate Bhagavad Gita - Discover the Arjuna in You" were presented to the school Library.</p>
                </div>
            </div>
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/Adani26-07-2019.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>25-07-2021,26-07-2019</h2>
                    <p class="timeline__content-desc"><b>Adani Solar & Power</b><br>Two days workshop of our signature program - "Discover The Arjuna In You" which invlolves using the concepts of Bhagavad Gita to increase productivity of individuals towards greater productivity of the organization. Each participant was given a copy of the book "The Corporate Bhagavad Gita" </p>
                </div>
            </div>
			
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/iimm10-08-2019.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>10-08-2019</h2>
                    <p class="timeline__content-desc"><b>Indian Institute of Materials Management (IIMM)</b><br>Session with members of IIMM which was highly interactive and appreciated by everyone. </p>
                </div>
            </div>
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/Adani21-08-2019.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>20-08-2021,21-08-2021</h2>
                    <p class="timeline__content-desc"><b>Adani Solar</b></br>Two days workshop of our signature program - "Discover The Arjuna In You" which invlolves using the concepts of Bhagavad Gita to increase productivity of individuals towards greater productivity of the organization. Each participant was given a copy of the book "The Corporate Bhagavad Gita" </p>
                </div>
            </div>
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/ama.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>05-09-2019</h2>
                    <p class="timeline__content-desc"><b>Ahmedabad Management Association</b><br>Training done for Rashtriya Bal Swasthya Karyakram (RBSK) representatives on Time Management. Highly interactive session appreciated by all participants</p>
                </div>
            </div>
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/gls06-09-2019.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>06-09-2019</h2>
                    <p class="timeline__content-desc"><b>GLS University</b><br>Talk on Leadership & Team Building based on our book, "The Corporate Bhagavad Gita - Discover The Arjuna in You" for second year students</p>
                </div>
            </div>
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/ama.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>12-09-2019</h2>
                    <p class="timeline__content-desc"><b>Ahmedabad Management Association</b><br>Training done for Rashtriya Bal Swasthya Karyakram (RBSK) representatives on Leadership, Motivation and Time Management. Highly interactive session appreciated by all participants</p>
                </div>
			</div>
            <div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/Reliance25-09-2019.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>25-09-2019</h2>
                    <p class="timeline__content-desc"><b>Reliance Retail</b><br>Four hours session conducted with the middle and senior management of Reliance Retail on the importance of focus in leadership from Bhagavad Gita. Each participant was given a copy of the book "The Corporate Bhagavad Gita" </p>
                </div>
            </div>
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/Ama12-09-2019.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>13-10-2019</h2>
                    <p class="timeline__content-desc"><b>Ahmedabad Management Association</b><br>Training done for Rashtriya Bal Swasthya Karyakram (RBSK) representatives on Managing Teams. Highly interactive session appreciated by all participants</p>
                </div>
            </div>
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/ama.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>15-10-2019</h2>
                    <p class="timeline__content-desc"><b>Ahmedabad Management Association</b><br>Training done for Tourists Guides to be deployed at the Statue of Unity (SoU). Highly interactive session appreciated by all participants</p>
                </div>
            </div>
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/ama19-09-2019.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>19-10-2019</h2>
                    <p class="timeline__content-desc"><b>Ahmedabad Management Association</b><br>One Day workshop conducted on Leadership Lessons from Indian Wisdom for middle and senior level management. Each participant was presented with a signed copy of our book "The Corporate Bhagavad Gita - Discover The Arjuna in You"</p>
                </div>
            </div>
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/ama.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>20-10-2019</h2>
                    <p class="timeline__content-desc"><b>Ahmedabad Management Association</b><br>Second batch of Training done for Tourists Guides to be deployed at the Statue of Unity (SoU). Highly interactive session appreciated by all participants</p>
                </div>
            </div>
			
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/Adani15-11-2019.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>15-11-2019,16-11-2019</h2>
                    <p class="timeline__content-desc"><b>Adani Solar</b><br>Two days workshop of our signature program - "Discover The Arjuna In You" which invlolves using the concepts of Bhagavad Gita to increase productivity of individuals towards greater productivity of the organization. Each participant was given a copy of the book "The Corporate Bhagavad Gita" .</p>
                </div>
            </div>
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/ama.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>23-11-2019,24-11-2019</h2>
                    <p class="timeline__content-desc"><b>Ahmedabad Management Association</b><br>Third batch of training done for Tourists Guides to be deployed at the Statue of Unity (SoU). Highly interactive session appreciated by all participants</p>
                </div>
            </div>
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/ama.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>16,17,18,19-03-2020</h2>
                    <p class="timeline__content-desc"><b>Ahmedabad Management Association</b><br>Enhancing Sales and Service Marketing Modules for Diploma Course in Management. Highly appreciated by participants on account of real life examples to build the right prespective on the concepts</p>
                </div>
            </div>
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/online1.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>8-25th May'2020</h2>
                    <p class="timeline__content-desc"><b>Gita Chanting Is Enchanting</b><br>First batch (online). Duration of the program was 28 hrs.</p>
                </div>
            </div>
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/amity14-05-2020.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>14-05-2020</h2>
                    <p class="timeline__content-desc"><b>Amity University</b><br>Highly interactive session with first year management students of Amity University, Ahmedabad</p>
                </div>
            </div>
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/olx15-05-2020.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>15-05-2020</h2>
                    <p class="timeline__content-desc"><b>OLX Cash My Car</b><br>Highly interactive session with Olx Cash My Car employees. Using Bhagavad Gita as a guide to establish how individual productivity can be enhanced.</p>
                </div>
            </div>
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/online1.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>1-16th June'2020</h2>
                    <p class="timeline__content-desc"><b>Gita Chanting Is Enchanting</b><br>Second Batch (online). The duration of program was 24hrs.</p>
                </div>
            </div>
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/kalorex03-06-2020.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>03-06-2020</h2>
                    <p class="timeline__content-desc"><b>Kalorex Foundation</b><br>Highly interactive Facebook Live session with Kalorex Foundation on how to deal with Lock down by adhering to the preachings of Bhagavad Gita</p>
                </div>
            </div>
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/online2.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>22 June - 6th July'2020</h2>
                    <p class="timeline__content-desc"><b>Gita Chanting Is Enchanting</b><br>Third Batch (online). The duration of this program was 24hrs.</p>
                </div>
            </div>
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/amity05-08-2020.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>05-08-2020</h2>
                    <p class="timeline__content-desc"><b>Amity University</b><br>Highly interactive session with management students ( freshers - new admission) of Amity University, Ahmedabad</p>
                </div>
            </div>
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/volansys.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>07-08-2020</h2>
                    <p class="timeline__content-desc"><b>Volansys</b><br>Highly Interactive session on Lockdown learnings from Bhagavad Gita with middle management of Volansys</p>
                </div>
            </div>
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/onlineweekendbatch.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>11 Jul - 16 Aug'2020</h2>
                    <p class="timeline__content-desc"><b>Gita Chanting Is Enchanting</b><br>Fourth - Weekend Batch (Sat-Sun) (online). The duration of this program was 24hrs.</p>
                </div>
            </div>
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/onlineweekendbatch.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>22 Aug - 27 Sep'2020</h2>
                    <p class="timeline__content-desc"><b>Gita Chanting Is Enchanting</b><br>Fifth - Weekend Batch (Sat-Sun) (online). The duration of this program was 24hrs.</p>
                </div>
            </div>
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/online2.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>5 Dec'2020 - 03Jan'2021</h2>
                    <p class="timeline__content-desc"><b>Gita Chanting Is Enchanting</b><br>Sixth - Weekend Batch (Sat-Sun) (online). The duration of this program was 24hrs.</p>
                </div>
            </div>
            <div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/mica25-02-2021.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>25,26-02-2021</h2>
                    <p class="timeline__content-desc"><b>MICA</b><br>Sales and Distribution Management with students of final year</p>
                </div>
            </div>
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/ama.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>12-27th Feb'2021 & 12,19th Mar'2021</h2>
                    <p class="timeline__content-desc"><b>Ahmedabad Management Association</b><br>Sales Management Modules for Diploma Course in Management. Highly appreciated by participants on account of real life examples to build the right prespective on the concepts</p>
                </div>
            </div>
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/ama.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>12,13,19th Apr'21</h2>
                    <p class="timeline__content-desc"><b>Ahmedabad Management Association</b><br>Retail and Wholesale and Sales Promotion Modules for Diploma Course in Management. Highly appreciated by participants on account of real life examples to build the right prespective on the concepts</p>
                </div>
            </div>
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/ama07-05-2021.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>07-05-2021</h2>
                    <p class="timeline__content-desc"><b>Ahmedabad Management Association</b><br>Talk on concept "What is NOT Sales". Organizations focus on what is sales but the need to understand what is NOT helps team focussed leading to incremental productivity. Highly interactive session appreciated by all.</p>
                </div>
            </div>
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/ama.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>13,14th May 2021</h2>
                    <p class="timeline__content-desc"><b>Ahmedabad Management Association</b><br>Enhancing Sales Management for Senior Management. Highly appreciated by participants on account of real life examples and case study to help build right prespective on the concepts</p>
                </div>
            </div>
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/ama.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>27-07-2021,04-08-2021</h2>
                    <p class="timeline__content-desc"><b>Ahmedabad Management Association</b><br>Sales Management for Diploma Course in Management. Highly appreciated by participants on account of real life examples to build the right prespective on the concepts</p>
                </div>
            </div>
            <div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/nldalmia29-07-2021.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>29-07-2021</h2>
                    <p class="timeline__content-desc"><b>NL Dalmia Institute of Management Studies and Research</b><br>Leadership lessons from Bhagavad Gita for the freshers getting inducted to the institute</p>
                </div>
            </div>
			<div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/visamo07-08-2021.png" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>07-08-2021</h2>
                    <p class="timeline__content-desc"><b>Visamo Kids Foundation</b><br>Thanksgiving of schools by Visamo Kids Foundation. Addressed an elite gathering comprising Mr. Rajendra Khemani, Mr. VC of Gujarat VidyaPeeth, Mr. Amit Thakkar - Philanthropist, Mr. Parth Oza - Actor, Singer and Brand Ambassador (Visamo Kids)</p>
                </div>
            </div>
            <div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/nutanbank20-08-2021.jpeg" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>20-08-2021</h2>
                    <p class="timeline__content-desc"><b>Nutan Nagrik Sahakari Bank Ltd.</b><br>First offline session post 16th March 2020!!!
Participants - Newly promoted to 'Officer' grade from 'Clerk'
Organization - Nutan Nagarik Sahkari Bank, Ahmedabad
Number of Participants - 24
Today's realization - 'Online' cannot replace 'Offline' in training... The connect, the adrenalin rush, the discussions, the learnings are unparalleled.... More importantly no option to switch off the video...!!! 😊</p>
                </div>
            </div>
            <div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/upcoming13-09-2021.PNG" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>13-09-2021 to 24-09-2021  </h2>
                    <p class="timeline__content-desc"><b>Ahmedabad Management Association</b><br>First offline batch post pandemic came as a waft of fresh air with highly engaged participants from Sales and Marketing professionals to entrepreneurs from various industries and walk of life.
                        The feedback from participants stand as a testimony to the engagement and the value add experienced!</p>
                </div>
            </div>
            
            <div class="timeline-item" data-text="">
                <div class="timeline__content">
                    <img src="img/event9thoct.jpeg" alt="" class="timeline__img">
                    <h2 class=timeline__content-title>09-10-2021</h2>
                    <p class="timeline__content-desc"><b>Gita Chanting Is Enchanting</b><br>Upcoming...</p>
                </div>
            </div>
           
            
          
			
        </div>
    </div>
    <script>
        (function($) {
  $.fn.timeline = function() {
    var selectors = {
      id: $(this),
      item: $(this).find(".timeline-item"),
      activeClass: "timeline-item--active",
      img: ".timeline__img"
    };
    selectors.item.eq(0).addClass(selectors.activeClass);
    selectors.id.css(
      "background-image",
      "url(" +
        selectors.item
          .first()
          .find(selectors.img)
          .attr("src") +
        ")"
    );
    var itemLength = selectors.item.length;
    $(window).scroll(function() {
      var max, min;
      var pos = $(this).scrollTop();
      selectors.item.each(function(i) {
        min = $(this).offset().top;
        max = $(this).height() + $(this).offset().top;
        var that = $(this);
        if (i == itemLength - 2 && pos > min + $(this).height() / 2) {
          selectors.item.removeClass(selectors.activeClass);
          selectors.id.css(
            "background-image",
            "url(" +
              selectors.item
                .last()
                .find(selectors.img)
                .attr("src") +
              ")"
          );
          selectors.item.last().addClass(selectors.activeClass);
        } else if (pos <= max - 40 && pos >= min) {
          selectors.id.css(
            "background-image",
            "url(" +
              $(this)
                .find(selectors.img)
                .attr("src") +
              ")"
          );
          selectors.item.removeClass(selectors.activeClass);
          $(this).addClass(selectors.activeClass);
        }
      });
    });
  };
})(jQuery);

$("#timeline-1").timeline();

    </script>
</body>
</html>