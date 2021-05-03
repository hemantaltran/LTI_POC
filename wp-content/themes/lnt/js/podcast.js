function togglePopup(obj) {
	var audioData = {
	  "popup-1": "https://www.lntinfotech.com/wp-content/uploads/2021/02/Digital-Workplace-Transformation-in-Dynamic-Scenarios.mp3",
	  "popup-2": "https://www.lntinfotech.com/wp-content/uploads/2020/11/Mosaic-Agnitio-Podcast.mp3",
	  "popup-3": "https://www.lntinfotech.com/wp-content/uploads/2020/11/AIOps-podcast_V1.0.mp3",
	  "popup-4": "https://www.lntinfotech.com/wp-content/uploads/2020/10/CDPs_-Deepthi-Bhat-Sound-Ideas-from-LTI-Podcast_V2.0.mp3",
	  "popup-5": "https://www.lntinfotech.com/wp-content/uploads/2020/09/Transition-Management-Podcast-Archana-Joshi_V1.0.mp3",
	  "popup-6": "https://www.lntinfotech.com/wp-content/uploads/2020/09/Digitalks_Sid_xFH.mp4" ,
	  "popup-7": "https://www.lntinfotech.com/wp-content/uploads/2020/07/Healthcare-Podcast-Vijai-SR_V1.0.mp3",
	  "popup-8": "https://www.lntinfotech.com/wp-content/uploads/2020/06/Mosaic-Podcast.mp3",
	  "popup-9": "https://www.lntinfotech.com/wp-content/uploads/2020/06/AI-to-Automation_V1.0.mp3",
	  "popup-10": "https://www.lntinfotech.com/wp-content/uploads/2020/06/Intelligent-Automation-OG_V1.0.mp3",
	  "popup-11": "https://www.lntinfotech.com/wp-content/uploads/2020/03/Archana-Joshi-Podcast-Chaos-Engineering_V1.0.mp3",
	  "popup-12": "https://www.lntinfotech.com/wp-content/uploads/2020/03/Design-thinking-Podcast-Nayna-Raut.mp3",
	  "popup-13": "https://www.lntinfotech.com/wp-content/uploads/2020/02/Podcast-Sunil-Agrawal.mp3",
	  "popup-14": "https://www.lntinfotech.com/wp-content/uploads/2020/01/Anil-Pandey-Podcast.mp3",
	  "popup-15": "https://www.lntinfotech.com/wp-content/uploads/2019/12/Swapnil-Pitale-Podcast_V1.0.mp3",
	  "popup-16": "https://www.lntinfotech.com/wp-content/uploads/2019/12/Soum-Podcast_V2.0_26mb.mp3",
	  "popup-17": "https://www.lntinfotech.com/wp-content/uploads/2019/12/Kamal-Shah-Podcast_V2.0.mp3",
	  "popup-18": "https://www.lntinfotech.com/wp-content/uploads/2019/12/Brijeshs-Podcast_V2.0-Privacy.mp3",
	  "popup-19": "https://www.lntinfotech.com/wp-content/uploads/2019/12/Brijeshs-Podcast_V2.0-Privacy.mp3",
	  "popup-20": "https://www.lntinfotech.com/wp-content/uploads/2019/08/Reinforcement-Learning_Podcast_V4.0_Without-Vidisha-Intro.mp3",
	  "popup-21":"https://www.lntinfotech.com/wp-content/uploads/2019/08/Augmented-Reality_PODCAST-2nd.mp3",
	  "popup-22": "https://www.lntinfotech.com/wp-content/uploads/2019/08/PODCAST%20-%20Somendra%20Mohanty.mp3",

	}
	var clsList = "<div class='podcast-popup active'>"
	  + "<div class='podcast-popup-window'>"
	  + "</div>"
	  + "<div class='podcast-content'>"
	  + " <div class='podcast-close-btn' onclick='closewid()' id='popup-1-aud'>&times;"
	  + "</div>"
	  + "<audio id='podcast-audio' controls=''>"
	  + " <source src=" + audioData[obj.id] + " id='popup-1-src' type='audio/mpeg'>"
	  + "</audio>"
	  + "</div>"
	  + "</div>";
	document.getElementById("popup-wid").innerHTML = clsList;
	console.log(obj.id);
	console.log(audioData[obj.id]);
  }

  function closewid() {
	document.getElementById('popup-wid').innerHTML = "";
  }
