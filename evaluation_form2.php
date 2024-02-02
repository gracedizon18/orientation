<?php 
	include 'admin/db_connect.php'; 
?>
<!DOCTYPE html>
<html>
	<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>
		</title>
		<link rel="stylesheet" type="text/css" href="1705432384_evaluation-form/styles.css" media="all" />
	</head>
	<style>
		body{
			font-family: 'Cambria' !important;
			background: none;
		}
		*{
			font-family: 'Cambria' !important;
		}
		.ckbx{
			height: 20px;
			width: 20px;
		}
		.submit-btn{
			padding: 10px 20px;
			border-radius: 20px;
			border: none;
			background: dodgerblue;
			color: whitesmoke;
			cursor: pointer;
		}
		.py-5{
			display: none;
		}
		.custom-input{
			border: none;
    		border-bottom: 1px solid #333;
			outline: none;
		}
	</style>
	<body>
		<form action="">
			<div class="wcdiv wcpage" style="width:612.1pt; height:1000.1pt;">
				<div class="wcdiv" style="left:89.15pt; top:99.87pt;">
					<div class="wcdiv" style="clip:rect(3.85pt,450.7pt,19.6pt,0.25pt);">
						<div class="wcdiv" style="left:7.45pt; top:6.83pt;">
							<span class="wcspan wctext001" style="font-size:7.5pt; left:0pt; top:0pt; line-height:8.79pt;">Excellence</span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:33.79pt; top:0pt; line-height:8.79pt;"> </span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:35.44pt; top:0pt; line-height:8.79pt;">|</span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:37.81pt; top:0pt; line-height:8.79pt;"> </span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:39.46pt; top:0pt; line-height:8.79pt;">Service</span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:62.77pt; top:0pt; line-height:8.79pt;"> </span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:64.43pt; top:0pt; line-height:8.79pt;">|</span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:66.8pt; top:0pt; line-height:8.79pt;"> </span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:68.45pt; top:0pt; line-height:8.79pt;">Leadership</span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:104.33pt; top:0pt; line-height:8.79pt;"> </span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:105.98pt; top:0pt; line-height:8.79pt;">and</span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:117.99pt; top:0pt; line-height:8.79pt;"> </span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:119.64pt; top:0pt; line-height:8.79pt;">Good</span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:136.35pt; top:0pt; line-height:8.79pt;"> </span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:138pt; top:0pt; line-height:8.79pt;">Governance</span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:176.1pt; top:0pt; line-height:8.79pt;"> </span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:177.75pt; top:0pt; line-height:8.79pt;">|</span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:180.12pt; top:0pt; line-height:8.79pt;"> </span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:181.78pt; top:0pt; line-height:8.79pt;">Innovation</span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:216.79pt; top:0pt; line-height:8.79pt;"> </span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:218.44pt; top:0pt; line-height:8.79pt;">|</span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:220.81pt; top:0pt; line-height:8.79pt;"> </span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:222.47pt; top:0pt; line-height:8.79pt;">Social</span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:241.26pt; top:0pt; line-height:8.79pt;"> </span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:242.91pt; top:0pt; line-height:8.79pt;">Responsibility</span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:288.72pt; top:0pt; line-height:8.79pt;"> </span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:290.37pt; top:0pt; line-height:8.79pt;">|</span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:292.74pt; top:0pt; line-height:8.79pt;"> </span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:294.39pt; top:0pt; line-height:8.79pt;">Integrity</span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:322.42pt; top:0pt; line-height:8.79pt;"> </span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:324.07pt; top:0pt; line-height:8.79pt;">|</span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:326.44pt; top:0pt; line-height:8.79pt;"> </span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:328.09pt; top:0pt; line-height:8.79pt;">Professionalism</span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:379.3pt; top:0pt; line-height:8.79pt;"> </span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:380.96pt; top:0pt; line-height:8.79pt;">|</span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:383.33pt; top:0pt; line-height:8.79pt;"> </span>
							<span class="wcspan wctext001" style="font-size:7.5pt; left:384.98pt; top:0pt; line-height:8.79pt;">Spirituality</span>
						</div>
					</div>
				</div>
				<div class="wcdiv">
					<img class="wcimg" style="left:50.25pt; top:6.4pt; width:250.27pt; height:85.15pt;" src="1705432384_evaluation-form/1705432384_evaluation-form-1.jpeg" />
				</div>
				<div class="wcdiv" style="left:72pt; top:872.39pt;">
					<div class="wcdiv" style="clip:rect(4.1pt,117.25pt,41.9pt,0.5pt);">
						<div class="wcdiv" style="left:7.7pt; top:4.1pt;">
							<span class="wcspan wctext001" style="font-size:8pt; left:0pt; top:0pt; line-height:9.38pt;">Doc.</span>
							<span class="wcspan wctext001" style="font-size:8pt; left:14.71pt; top:0pt; line-height:9.38pt;"> </span>
							<span class="wcspan wctext001" style="font-size:8pt; left:16.47pt; top:0pt; line-height:9.38pt;">Code:</span>
							<span class="wcspan wctext001" style="font-size:8pt; left:35.66pt; top:0pt; line-height:9.38pt;"> </span>
							<span class="wcspan wctext001" style="font-size:8pt; left:37.43pt; top:0pt; line-height:9.38pt;">SLSU-QF-EX13</span>
							<span class="wcspan wctext001" style="font-size:8pt; left:0pt; top:10.79pt; line-height:9.38pt;">Revision:</span>
							<span class="wcspan wctext001" style="font-size:8pt; left:31.61pt; top:10.79pt; line-height:9.38pt;"> </span>
							<span class="wcspan wctext001" style="font-size:8pt; left:33.37pt; top:10.79pt; line-height:9.38pt;">01</span>
							<span class="wcspan wctext001" style="font-size:8pt; left:0pt; top:21.57pt; line-height:9.38pt;">Date:</span>
							<span class="wcspan wctext001" style="font-size:8pt; left:17.92pt; top:21.57pt; line-height:9.38pt;"> </span>
							<span class="wcspan wctext001" style="font-size:8pt; left:19.68pt; top:21.57pt; line-height:9.38pt;">08</span>
							<span class="wcspan wctext001" style="font-size:8pt; left:28.54pt; top:21.57pt; line-height:9.38pt;"> </span>
							<span class="wcspan wctext001" style="font-size:8pt; left:30.3pt; top:21.57pt; line-height:9.38pt;">April</span>
							<span class="wcspan wctext001" style="font-size:8pt; left:47.44pt; top:21.57pt; line-height:9.38pt;"> </span>
							<span class="wcspan wctext001" style="font-size:8pt; left:49.2pt; top:21.57pt; line-height:9.38pt;">2022</span>
						</div>
					</div>
				</div>
				<div class="wcdiv" title="C:\Users\OP\Downloads\275410372_5066875620073934_6423128682967123635_n.png">
					<img class="wcimg" style="left:414.37pt; top:863.71pt; width:106.02pt; height:54.81pt;" src="1705432384_evaluation-form/1705432384_evaluation-form-2.png" />
				</div>
				<div class="wcdiv">
					<img class="wcimg" style="left:199.5pt; top:857.42pt; width:180.75pt; height:69.6pt;" src="1705432384_evaluation-form/1705432384_evaluation-form-3.png" />
				</div>
				<div class="wcdiv" style="left:72pt; top:72pt; clip:rect(0pt,540.1pt,53.74pt,-72pt);">
					<div class="wcdiv" style="top:41.02pt;">
						<span class="wcspan wctext002" style="font-size:10pt; left:0pt; top:-0.02pt; line-height:12.21pt;">          </span>
					</div>
				</div>
				<div class="wcdiv" style="left:79.5pt; top:119.67pt;">
					<div class="wcdiv" style="left:0pt; top:-0.5pt; width:441pt; height:0pt; border-top:solid 1pt #000000;">
					</div>
				</div>
				<div class="wcdiv" style="left:322.6pt; top:16.83pt;">
					<div class="wcdiv" style="left:0pt; top:0pt; width:294px; height:105px;">
						<object type="image/svg+xml" data="1705432384_evaluation-form/1705432384_evaluation-form-4.svg"></object>
					</div>
					<div class="wcdiv" style="clip:rect(3.85pt,220.25pt,75.7pt,0.25pt);">
						<div class="wcdiv" style="left:7.45pt; top:3.85pt;">
							<span class="wcspan wctext001" style="font-size:10pt; color:#010639; left:0pt; top:8.21pt; line-height:11.72pt;">BONTOC</span>
							<span class="wcspan wctext001" style="font-size:10pt; color:#010639; left:37.54pt; top:8.21pt; line-height:11.72pt;"> </span>
							<span class="wcspan wctext001" style="font-size:10pt; color:#010639; left:39.74pt; top:8.21pt; line-height:11.72pt;">CAMPUS</span>
							<span class="wcspan wctext001" style="font-size:10pt; color:#010639; left:0pt; top:19.93pt; line-height:11.72pt;">San</span>
							<span class="wcspan wctext001" style="font-size:10pt; color:#010639; left:15.43pt; top:19.93pt; line-height:11.72pt;"> </span>
							<span class="wcspan wctext001" style="font-size:10pt; color:#010639; left:17.63pt; top:19.93pt; line-height:11.72pt;">Ramon</span>
							<span class="wcspan wctext001" style="font-size:10pt; left:47.93pt; top:19.93pt; line-height:11.72pt;">,</span>
							<span class="wcspan wctext001" style="font-size:10pt; left:49.98pt; top:19.93pt; line-height:11.72pt;"> </span>
							<span class="wcspan wctext001" style="font-size:10pt; left:52.18pt; top:19.93pt; line-height:11.72pt;">Bontoc,</span>
							<span class="wcspan wctext001" style="font-size:10pt; left:84.34pt; top:19.93pt; line-height:11.72pt;"> </span>
							<span class="wcspan wctext001" style="font-size:10pt; left:86.54pt; top:19.93pt; line-height:11.72pt;">Southern</span>
							<span class="wcspan wctext001" style="font-size:10pt; left:125.83pt; top:19.93pt; line-height:11.72pt;"> </span>
							<span class="wcspan wctext001" style="font-size:10pt; left:128.03pt; top:19.93pt; line-height:11.72pt;">Leyte</span>
							<span class="wcspan wctext001" style="font-size:10pt; left:0pt; top:31.66pt; line-height:11.72pt;">Contact</span>
							<span class="wcspan wctext001" style="font-size:10pt; left:32.57pt; top:31.66pt; line-height:11.72pt;"> </span>
							<span class="wcspan wctext001" style="font-size:10pt; left:34.78pt; top:31.66pt; line-height:11.72pt;">No:</span>
							<span class="wcspan wctext001" style="font-size:10pt; left:49.53pt; top:31.66pt; line-height:11.72pt;"> </span>
							<span class="wcspan wctext001" style="font-size:10pt; left:51.73pt; top:31.66pt; line-height:11.72pt;">09989791809</span>
							<span class="wcspan wctext001" style="font-size:10pt; color:#010639; left:0pt; top:43.38pt; line-height:11.72pt;">Email:</span>
							<span class="wcspan wctext001" style="font-size:10pt; color:#010639; left:27.09pt; top:43.38pt; line-height:11.72pt;"> </span>
							<a href="mailto:cd_bt@southernleytestateu.edu.ph">
								<div class="wcdiv">
									<span class="wcspan wctext001" style="font-size:10pt; color:#0563c1; left:29.29pt; top:43.38pt; line-height:11.72pt;">cd_bt@southernleytestateu.edu.ph</span>
								</div>
							</a>
							<div class="wcdiv" style="left:29.29pt; top:53.49pt; width:148.36pt; height:0pt; border-top:solid 0.75pt #0563c1;">
							</div>
							<span class="wcspan wctext001" style="font-size:10pt; color:#010639; left:0pt; top:55.1pt; line-height:11.72pt;">Website:</span>
							<span class="wcspan wctext001" style="font-size:10pt; color:#010639; left:37.54pt; top:55.1pt; line-height:11.72pt;"> </span>
							<span class="wcspan wctext001" style="font-size:10pt; color:#010639; left:39.74pt; top:55.1pt; line-height:11.72pt;">www.southernleytestateu.edu.ph</span>
						</div>
					</div>
				</div>
				<div class="wcdiv" style="left:72pt; top:850.67pt;">
					<div class="wcdiv" style="left:0pt; top:-0.5pt; width:449.25pt; height:0pt; border-top:solid 1pt #000000;">
					</div>
				</div>
				<div class="wcdiv" style="left:72pt; top:124.74pt;">
					<span class="wcspan wctext003" style="left:151.46pt; top:0pt; line-height:14.07pt;">Office of the Extension Services</span>
					<div class="wcdiv" style="top:25.79pt;">
						<span class="wcspan wctext004" style="font-size:11pt; left:127.95pt; top:0pt; line-height:12.9pt;">EXTENSION ACTIVITY EVALUATION FORM</span>
					</div>
					<div class="wcdiv" style="top:50.62pt;">
						<span class="wcspan wctext001" style="font-size:11pt; left:168.8pt; top:-2pt; line-height:12.9pt;"><input type="text" class="custom-input" style="width: 398px;"></span>
					</div>
					<div class="wcdiv" style="top:50.62pt;">
						<div class="wcdiv" style="clip:rect(0pt,155.55pt,13.9pt,0pt);">
							<div class="wcdiv" style="left:5.4pt;">
								<span class="wcspan wctext001" style="font-size:11pt; left:0pt; top:0pt; line-height:12.9pt;">Name of Participant (</span>
								<span class="wcspan wctext005" style="font-size:11pt; left:100.21pt; top:0pt; line-height:12.9pt;">Optional</span>
								<span class="wcspan wctext001" style="font-size:11pt; left:139.8pt; top:0pt; line-height:12.9pt;">)</span>
							</div>
						</div>
						<div class="wcdiv" style="left:155.55pt; clip:rect(0pt,13.9pt,13.9pt,0pt);">
							<div class="wcdiv" style="left:5.4pt;">
								<span class="wcspan wctext004" style="font-size:11pt; left:0pt; top:0pt; line-height:12.9pt;">:</span>
							</div>
						</div>
						
						<div class="wcdiv" style="top:12.9pt;">
							<div class="wcdiv" style="clip:rect(0pt,155.55pt,14.4pt,0pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0pt; top:0pt; line-height:12.9pt;">Title of Activity</span>
								</div>
							</div>
							<div class="wcdiv" style="left:155.55pt; clip:rect(0pt,13.9pt,14.4pt,0pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext004" style="font-size:11pt; left:0pt; top:0pt; line-height:12.9pt;">:</span>
								</div>
							</div>
							<div class="wcdiv" style="left:165.55pt; clip:rect(0pt,313.9pt,14.4pt,0pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext004" style="font-size:11pt; left:0pt; top:0pt; line-height:12.9pt;"><?php echo $_GET['title']; ?></span>
								</div>
							</div>
						</div>
						<div class="wcdiv" style="top:39.69pt;">
							<div class="wcdiv" style="clip:rect(0pt,40.45pt,14.4pt,0pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0pt; top:0pt; line-height:12.9pt;">Venue</span>
								</div>
							</div>
							<div class="wcdiv" style="left:40.45pt; clip:rect(0pt,13.9pt,14.4pt,0pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext004" style="font-size:11pt; left:0pt; top:0pt; line-height:12.9pt;">:</span>
								</div>
							</div>
							<div class="wcdiv" style="left:220.5pt; clip:rect(0pt,53.6pt,14.4pt,0pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0pt; top:0pt; line-height:12.9pt;">Duration</span>
								</div>
							</div>
							<div class="wcdiv" style="left:274.1pt; clip:rect(0pt,13.9pt,14.4pt,0pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext004" style="font-size:11pt; left:0pt; top:0pt; line-height:12.9pt;">:</span>
								</div>
							</div>
							<div class="wcdiv" style="left:283.1pt; clip:rect(0pt,70pt,14.4pt,0pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext004" style="font-size:11pt; left:0pt; top:0pt; line-height:12.9pt;"><?php echo $_GET['duration']; ?></span>
								</div>
							</div>
							<div class="wcdiv" style="left:354.05pt; clip:rect(0pt,32.55pt,14.4pt,0pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.01pt; top:0pt; line-height:12.9pt;">Date</span>
								</div>
							</div>
							<div class="wcdiv" style="left:386.6pt; clip:rect(0pt,13.9pt,14.4pt,0pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext004" style="font-size:11pt; left:0pt; top:0pt; line-height:12.9pt;">:</span>
								</div>
							</div>
							<div class="wcdiv" style="left:394.6pt; clip:rect(0pt,65pt,14.4pt,0pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext004" style="font-size:11pt; left:0pt; top:0pt; line-height:12.9pt;"><?php echo $_GET['_date']; ?></span>
								</div>
							</div>
						</div>
						<!-- <div class="wcdiv" style="left:169.45pt; top:12.9pt; width:298.15pt; height:0pt; border-top:solid 0.75pt #000000;">
						<input type="text" class="custom-input" style="width:298.15pt">
						</div> -->
						<div class="wcdiv" style="left:169.45pt; top:26.29pt; width:298.15pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:169.45pt; top:39.69pt; width:298.15pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:54.35pt; top:53.08pt; width:166.15pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:288pt; top:53.08pt; width:66.05pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:400.5pt; top:53.08pt; width:67.1pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
					</div>
					<div class="wcdiv" style="left:28.35pt; top:115.93pt;">
						<span class="wcspan wctext005" style="font-size:10pt; left:0pt; top:0.55pt; line-height:11.72pt;">Please <span style="font-weight: bold;">Click</span></span>
						<!-- <span class="wcspan wctext006" style="font-size:10pt; left:58.06pt; top:0pt; line-height:12.25pt;"></span> -->
						<span class="wcspan wctext005" style="font-size:10pt; left:50.05pt; top:0.55pt; line-height:11.72pt;"> the column that best expresses how you rate the items listed below, where: </span>
					</div>
					<div class="wcdiv" style="left:28.35pt; top:128.21pt;">
						<span class="wcspan wctext004" style="font-size:10pt; left:0pt; top:0pt; line-height:11.72pt;">O</span>
						<span class="wcspan wctext005" style="font-size:10pt; left:6.95pt; top:0pt; line-height:11.72pt;"> – Outstanding, </span>
						<span class="wcspan wctext004" style="font-size:10pt; left:71.98pt; top:0pt; line-height:11.72pt;">VS</span>
						<span class="wcspan wctext005" style="font-size:10pt; left:83.45pt; top:0pt; line-height:11.72pt;"> – Very Satisfactory, </span>
						<span class="wcspan wctext004" style="font-size:10pt; left:168.01pt; top:0pt; line-height:11.72pt;">S </span>
						<span class="wcspan wctext005" style="font-size:10pt; left:175.34pt; top:0pt; line-height:11.72pt;">– Satisfactory, &amp; </span>
						<span class="wcspan wctext004" style="font-size:10pt; left:245.29pt; top:0pt; line-height:11.72pt;">F</span>
						<span class="wcspan wctext005" style="font-size:10pt; left:250.81pt; top:0pt; line-height:11.72pt;"> – Fair</span>
					</div>
					<div class="wcdiv" style="left:0.25pt; top:139.93pt;">
						<div class="wcdiv" style="clip:rect(0.5pt,326.75pt,16.33pt,0.25pt);">
							<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
								<span class="wcspan wctext001" style="font-size:11pt; left:134.76pt; top:0pt; line-height:12.9pt;">CRITERIA</span>
							</div>
						</div>
						<div class="wcdiv" style="left:327pt; clip:rect(0.5pt,35.7pt,16.33pt,0.25pt);">
							<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
								<span class="wcspan wctext001" style="font-size:11pt; left:8.98pt; top:0pt; line-height:12.9pt;">O</span>
							</div>
						</div>
						<div class="wcdiv" style="left:362.95pt; clip:rect(0.5pt,32.95pt,16.33pt,0.25pt);">
							<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
								<span class="wcspan wctext001" style="font-size:11pt; left:5.15pt; top:0pt; line-height:12.9pt;">VS</span>
							</div>
						</div>
						<div class="wcdiv" style="left:396.15pt; clip:rect(0.5pt,35pt,16.33pt,0.25pt);">
							<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
								<span class="wcspan wctext001" style="font-size:11pt; left:9.5pt; top:0pt; line-height:12.9pt;">S</span>
							</div>
						</div>
						<div class="wcdiv" style="left:431.4pt; clip:rect(0.5pt,35.95pt,16.33pt,0.25pt);">
							<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
								<span class="wcspan wctext001" style="font-size:11pt; left:9.75pt; top:0pt; line-height:12.9pt;">F</span>
							</div>
						</div>
						<div class="wcdiv" style="top:15.33pt;">
							<div class="wcdiv" style="clip:rect(0.5pt,467.35pt,13.22pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext004" style="font-size:10pt; left:0pt; top:0pt; line-height:11.72pt;">I.</span>
									<span class="wcspan wctext004" style="font-size:10pt; left:15.95pt; top:0pt; line-height:11.72pt;">Activity Evaluation &amp; Material Used</span>
								</div>
							</div>
						</div>
						<div class="wcdiv" style="top:27.55pt;">
							<div class="wcdiv" style="clip:rect(0.5pt,326.75pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:23.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0pt; top:0.97pt; line-height:12.9pt;">1.</span>
									<span class="wcspan wctext001" style="font-size:11pt; left:18pt; top:0.97pt; line-height:12.9pt;">Quality / Effectiveness of the activity </span>
								</div>
							</div>
						</div>
						<div class="wcdiv" style="top:42.88pt;">
							<div class="wcdiv" style="clip:rect(0.5pt,326.75pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:41.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0pt; top:0.97pt; line-height:12.9pt;">a.</span>
									<span class="wcspan wctext001" style="font-size:11pt; left:18pt; top:0.97pt; line-height:12.9pt;">Clarity of the Presentation</span>
								</div>
							</div>
							<div class="wcdiv" style="left:327pt; clip:rect(0.5pt,35.7pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.05pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="clarity"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:362.95pt; clip:rect(0.5pt,32.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.06pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="clarity"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:396.15pt; clip:rect(0.5pt,35pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.02pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="clarity"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:431.4pt; clip:rect(0.5pt,35.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.05pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="clarity"></span>
								</div>
							</div>
						</div>
						<div class="wcdiv" style="top:58.21pt;">
							<div class="wcdiv" style="clip:rect(0.5pt,326.75pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:41.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0pt; top:0.97pt; line-height:12.9pt;">b.</span>
									<span class="wcspan wctext001" style="font-size:11pt; left:18pt; top:0.97pt; line-height:12.9pt;">Completeness of Materials</span>
								</div>
							</div>
							<div class="wcdiv" style="left:327pt; clip:rect(0.5pt,35.7pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.05pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="materials"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:362.95pt; clip:rect(0.5pt,32.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.06pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="materials"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:396.15pt; clip:rect(0.5pt,35pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.02pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="materials"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:431.4pt; clip:rect(0.5pt,35.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.05pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="materials"></span>
								</div>
							</div>
						</div>
						<div class="wcdiv" style="top:73.54pt;">
							<div class="wcdiv" style="clip:rect(0.5pt,326.75pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:41.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0pt; top:0.97pt; line-height:12.9pt;">c.</span>
									<span class="wcspan wctext001" style="font-size:11pt; left:18pt; top:0.97pt; line-height:12.9pt;">Achievement of Activity Objective</span>
								</div>
							</div>
							<div class="wcdiv" style="left:327pt; clip:rect(0.5pt,35.7pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.05pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="objective"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:362.95pt; clip:rect(0.5pt,32.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.06pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="objective"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:396.15pt; clip:rect(0.5pt,35pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.02pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="objective"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:431.4pt; clip:rect(0.5pt,35.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.05pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="objective"></span>
								</div>
							</div>
						</div>
						<div class="wcdiv" style="top:88.87pt;">
							<div class="wcdiv" style="clip:rect(0.5pt,467.35pt,14.4pt,0.25pt);">
								<div class="wcdiv" style="left:23.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0pt; top:0pt; line-height:12.9pt;">2.</span>
									<span class="wcspan wctext001" style="font-size:11pt; left:18pt; top:0pt; line-height:12.9pt;">Relevance of The Activity Conducted</span>
								</div>
							</div>
						</div>
						<div class="wcdiv" style="top:102.27pt;">
							<div class="wcdiv" style="clip:rect(0.5pt,326.75pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:41.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0pt; top:0.97pt; line-height:12.9pt;">a.</span>
									<span class="wcspan wctext001" style="font-size:11pt; left:18pt; top:0.97pt; line-height:12.9pt;">Usefulness of the topics to the beneficiaries </span>
								</div>
							</div>
							<div class="wcdiv" style="left:327pt; clip:rect(0.5pt,35.7pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.05pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="usefulness"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:362.95pt; clip:rect(0.5pt,32.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.06pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="usefulness"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:396.15pt; clip:rect(0.5pt,35pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.02pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="usefulness"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:431.4pt; clip:rect(0.5pt,35.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.05pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="usefulness"></span>
								</div>
							</div>
						</div>
						<div class="wcdiv" style="top:117.6pt;">
							<div class="wcdiv" style="clip:rect(0.5pt,326.75pt,27.29pt,0.25pt);">
								<div class="wcdiv" style="left:41.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0pt; top:0pt; line-height:12.9pt;">b.</span>
									<span class="wcspan wctext001" style="font-size:11pt; left:18pt; top:0pt; line-height:12.9pt;">Appropriateness of the topic to the needs of the </span>
									<span class="wcspan wctext001" style="font-size:11pt; left:18pt; top:12.9pt; line-height:12.9pt;">beneficiaries</span>
								</div>
							</div>
							<div class="wcdiv" style="left:327pt; clip:rect(0.5pt,35.7pt,27.29pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.05pt; top:5.48pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="Appropriateness"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:362.95pt; clip:rect(0.5pt,32.95pt,27.29pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.06pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="Appropriateness"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:396.15pt; clip:rect(0.5pt,35pt,27.29pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.02pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="Appropriateness"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:431.4pt; clip:rect(0.5pt,35.95pt,27.29pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.05pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="Appropriateness"></span>
								</div>
							</div>
						</div>
						<div class="wcdiv" style="top:143.89pt;">
							<div class="wcdiv" style="clip:rect(0.5pt,326.75pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:23.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0pt; top:0.97pt; line-height:12.9pt;">3.</span>
									<span class="wcspan wctext001" style="font-size:11pt; left:18pt; top:0.97pt; line-height:12.9pt;">Efficiency of the activity conducted</span>
								</div>
							</div>
							<div class="wcdiv" style="left:327pt; clip:rect(0.5pt,35.7pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.05pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="Efficiency"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:362.95pt; clip:rect(0.5pt,32.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.06pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="Efficiency"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:396.15pt; clip:rect(0.5pt,35pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.02pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="Efficiency"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:431.4pt; clip:rect(0.5pt,35.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.05pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="Efficiency"></span>
								</div>
							</div>
						</div>
						<div class="wcdiv" style="top:159.22pt;">
							<div class="wcdiv" style="clip:rect(0.5pt,326.75pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:23.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0pt; top:0.97pt; line-height:12.9pt;">4.</span>
									<span class="wcspan wctext001" style="font-size:11pt; left:18pt; top:0.97pt; line-height:12.9pt;">Timeliness of the activity conducted</span>
								</div>
							</div>
							<div class="wcdiv" style="left:327pt; clip:rect(0.5pt,35.7pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.05pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="Timeliness"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:362.95pt; clip:rect(0.5pt,32.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.06pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="Timeliness"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:396.15pt; clip:rect(0.5pt,35pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.02pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="Timeliness"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:431.4pt; clip:rect(0.5pt,35.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.05pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="Timeliness"></span>
								</div>
							</div>
						</div>
						<div class="wcdiv" style="top:174.55pt;">
							<div class="wcdiv" style="clip:rect(0.5pt,326.75pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext004" style="font-size:11pt; left:0pt; top:0.97pt; line-height:12.9pt;">II.</span>
									<span class="wcspan wctext004" style="font-size:11pt; left:15.95pt; top:0.97pt; line-height:12.9pt;">Facility &amp; Facilitators/Secretariat</span>
								</div>
							</div>
						</div>
						<div class="wcdiv" style="top:189.88pt;">
							<div class="wcdiv" style="clip:rect(0.5pt,326.75pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:21.35pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0pt; top:0.97pt; line-height:12.9pt;">1.</span>
									<span class="wcspan wctext001" style="font-size:11pt; left:18pt; top:0.97pt; line-height:12.9pt;">The comfort and facilities within the activity room </span>
								</div>
							</div>
							<div class="wcdiv" style="left:327pt; clip:rect(0.5pt,35.7pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.05pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="comfort"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:362.95pt; clip:rect(0.5pt,32.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.06pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="comfort"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:396.15pt; clip:rect(0.5pt,35pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.02pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="comfort"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:431.4pt; clip:rect(0.5pt,35.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.05pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="comfort"></span>
								</div>
							</div>
						</div>
						<div class="wcdiv" style="top:205.21pt;">
							<div class="wcdiv" style="clip:rect(0.5pt,326.75pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:21.35pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0pt; top:0.97pt; line-height:12.9pt;">2.</span>
									<span class="wcspan wctext001" style="font-size:11pt; left:18pt; top:0.97pt; line-height:12.9pt;">Helpfulness of the Facilitators/Secretariat</span>
								</div>
							</div>
							<div class="wcdiv" style="left:327pt; clip:rect(0.5pt,35.7pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.05pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="Helpfulness"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:362.95pt; clip:rect(0.5pt,32.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.06pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="Helpfulness"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:396.15pt; clip:rect(0.5pt,35pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.02pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="Helpfulness"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:431.4pt; clip:rect(0.5pt,35.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.05pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="Helpfulness"></span>
								</div>
							</div>
						</div>
						<div class="wcdiv" style="top:220.54pt;">
							<div class="wcdiv" style="clip:rect(0.5pt,326.75pt,26.12pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="left:0pt; top:0pt; line-height:14.07pt;">III.</span>
									<span class="wcspan wctext004" style="left:36pt; top:0pt; line-height:14.07pt;">Resource Speakers</span>
									<span class="wcspan wctext001" style="left:140.62pt; top:0pt; line-height:14.07pt;"> </span>
									<span class="wcspan wctext005" style="font-size:9pt; left:143.26pt; top:2.85pt; line-height:10.55pt;">(Pls. indicate the Name(s) of the Resource </span>
									<span class="wcspan wctext005" style="font-size:9pt; left:36pt; top:14.07pt; line-height:10.55pt;">Person)</span>
								</div>
							</div>
						</div>
						<div class="wcdiv" style="top:245.66pt;">
							<div class="wcdiv" style="clip:rect(0.5pt,326.75pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:41.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="left:0pt; top:0.38pt; line-height:14.07pt;">A.</span>
									<span class="wcspan wctext001" style="left:18pt; top:0.38pt; line-height:14.07pt;">Resource Speaker 1: </span>
								</div>
							</div>
						</div>
						<div class="wcdiv" style="top:260.99pt;">
							<div class="wcdiv" style="clip:rect(0.5pt,326.75pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:56.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:10pt; left:0pt; top:1.55pt; line-height:11.72pt;">A.1. Knowledge of subject matter / task assigned</span>
								</div>
							</div>
							<div class="wcdiv" style="left:327pt; clip:rect(0.5pt,35.7pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.01pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="Knowledge"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:362.95pt; clip:rect(0.5pt,32.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.02pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="Knowledge"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:396.15pt; clip:rect(0.5pt,35pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.07pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="Knowledge"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:431.4pt; clip:rect(0.5pt,35.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.01pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="Knowledge"></span>
								</div>
							</div>
						</div>
						<div class="wcdiv" style="top:276.32pt;">
							<div class="wcdiv" style="clip:rect(0.5pt,326.75pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:56.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:10pt; left:0pt; top:1.55pt; line-height:11.72pt;">A.2. Preparedness for the presentation</span>
								</div>
							</div>
							<div class="wcdiv" style="left:327pt; clip:rect(0.5pt,35.7pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.01pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="Preparedness"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:362.95pt; clip:rect(0.5pt,32.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.02pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="Preparedness"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:396.15pt; clip:rect(0.5pt,35pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.07pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="Preparedness"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:431.4pt; clip:rect(0.5pt,35.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.01pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="Preparedness"></span>
								</div>
							</div>
						</div>
						<div class="wcdiv" style="top:291.65pt;">
							<div class="wcdiv" style="clip:rect(0.5pt,326.75pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:56.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:10pt; left:0pt; top:1.55pt; line-height:11.72pt;">A.3. Questions handling / Ability to answer questions</span>
								</div>
							</div>
							<div class="wcdiv" style="left:327pt; clip:rect(0.5pt,35.7pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.01pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="Questions"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:362.95pt; clip:rect(0.5pt,32.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.02pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="Questions"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:396.15pt; clip:rect(0.5pt,35pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.07pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="Questions"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:431.4pt; clip:rect(0.5pt,35.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.01pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="Questions"></span>
								</div>
							</div>
						</div>
						<div class="wcdiv" style="top:306.98pt;">
							<div class="wcdiv" style="clip:rect(0.5pt,326.75pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:41.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="left:0pt; top:0.38pt; line-height:14.07pt;">B.</span>
									<span class="wcspan wctext001" style="left:18pt; top:0.38pt; line-height:14.07pt;">Resource Speaker 2:</span>
								</div>
							</div>
						</div>
						<div class="wcdiv" style="top:322.31pt;">
							<div class="wcdiv" style="clip:rect(0.5pt,326.75pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:56.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:10pt; left:0pt; top:1.55pt; line-height:11.72pt;">B.1. Knowledge of subject matter / task assigned</span>
								</div>
							</div>
							<div class="wcdiv" style="left:327pt; clip:rect(0.5pt,35.7pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.01pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="KnowledgeOfSubject"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:362.95pt; clip:rect(0.5pt,32.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.02pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="KnowledgeOfSubject"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:396.15pt; clip:rect(0.5pt,35pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.07pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="KnowledgeOfSubject"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:431.4pt; clip:rect(0.5pt,35.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.01pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="KnowledgeOfSubject"></span>
								</div>
							</div>
						</div>
						<div class="wcdiv" style="top:337.64pt;">
							<div class="wcdiv" style="clip:rect(0.5pt,326.75pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:56.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:10pt; left:0pt; top:1.55pt; line-height:11.72pt;">B.2. Preparedness for the presentation</span>
								</div>
							</div>
							<div class="wcdiv" style="left:327pt; clip:rect(0.5pt,35.7pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.01pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="PreparednessPresentation"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:362.95pt; clip:rect(0.5pt,32.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.02pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="PreparednessPresentation"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:396.15pt; clip:rect(0.5pt,35pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.07pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="PreparednessPresentation"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:431.4pt; clip:rect(0.5pt,35.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.01pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="PreparednessPresentation"></span>
								</div>
							</div>
						</div>
						<div class="wcdiv" style="top:352.97pt;">
							<div class="wcdiv" style="clip:rect(0.5pt,326.75pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:56.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:10pt; left:0pt; top:1.55pt; line-height:11.72pt;">B.3. Questions handling / Ability to answer questions</span>
								</div>
							</div>
							<div class="wcdiv" style="left:327pt; clip:rect(0.5pt,35.7pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.01pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="QuestionsHandling"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:362.95pt; clip:rect(0.5pt,32.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.02pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="QuestionsHandling"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:396.15pt; clip:rect(0.5pt,35pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.07pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="QuestionsHandling"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:431.4pt; clip:rect(0.5pt,35.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.01pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="QuestionsHandling"></span>
								</div>
							</div>
						</div>
						<div class="wcdiv" style="top:368.3pt;">
							<div class="wcdiv" style="clip:rect(0.5pt,326.75pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:41.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="left:0pt; top:0.38pt; line-height:14.07pt;">C.</span>
									<span class="wcspan wctext001" style="left:18pt; top:0.38pt; line-height:14.07pt;">Resource Speaker 3:</span>
								</div>
							</div>
						</div>
						<div class="wcdiv" style="top:383.63pt;">
							<div class="wcdiv" style="clip:rect(0.5pt,326.75pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:56.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:10pt; left:0pt; top:1.55pt; line-height:11.72pt;">C.1. Knowledge of subject matter / task assigned</span>
									<a name="_GoBack" style="left:206.42pt; top:1.55pt;">
									</a>
								</div>
							</div>
							<div class="wcdiv" style="left:327pt; clip:rect(0.5pt,35.7pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.01pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="KnowledgeC1"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:362.95pt; clip:rect(0.5pt,32.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.02pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="KnowledgeC1"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:396.15pt; clip:rect(0.5pt,35pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.07pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="KnowledgeC1"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:431.4pt; clip:rect(0.5pt,35.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.01pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="KnowledgeC1"></span>
								</div>
							</div>
						</div>
						<div class="wcdiv" style="top:398.96pt;">
							<div class="wcdiv" style="clip:rect(0.5pt,326.75pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:56.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:10pt; left:0pt; top:1.55pt; line-height:11.72pt;">C.2. Preparedness for the presentation</span>
								</div>
							</div>
							<div class="wcdiv" style="left:327pt; clip:rect(0.5pt,35.7pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.01pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="PreparednessC2"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:362.95pt; clip:rect(0.5pt,32.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.02pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="PreparednessC2"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:396.15pt; clip:rect(0.5pt,35pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.07pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="PreparednessC2"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:431.4pt; clip:rect(0.5pt,35.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.01pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="PreparednessC2"></span>
								</div>
							</div>
						</div>
						<div class="wcdiv" style="top:414.29pt;">
							<div class="wcdiv" style="clip:rect(0.5pt,326.75pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:56.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:10pt; left:0pt; top:1.55pt; line-height:11.72pt;">C.3. Questions handling / Ability to answer questions</span>
								</div>
							</div>
							<div class="wcdiv" style="left:327pt; clip:rect(0.5pt,35.7pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.01pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="QuestionsHandlingC3"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:362.95pt; clip:rect(0.5pt,32.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.02pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="QuestionsHandlingC3"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:396.15pt; clip:rect(0.5pt,35pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:3.07pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="QuestionsHandlingC3"></span>
								</div>
							</div>
							<div class="wcdiv" style="left:431.4pt; clip:rect(0.5pt,35.95pt,16.33pt,0.25pt);">
								<div class="wcdiv" style="left:5.4pt; top:0.5pt;">
									<span class="wcspan wctext001" style="font-size:11pt; left:0.01pt; top:0pt; line-height:12.9pt;"><input class="ckbx" type="radio" name="QuestionsHandlingC3"></span>
								</div>
							</div>
						</div>
						<div class="wcdiv" style="left:-0.25pt; top:0.5pt; width:0pt; height:429.12pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:326.75pt; top:0.5pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:362.7pt; top:0.5pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:395.9pt; top:0.5pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:431.15pt; top:0.5pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:467.35pt; top:0.5pt; width:0pt; height:429.12pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:326.75pt; top:28.05pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:326.75pt; top:43.38pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:326.75pt; top:58.71pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:326.75pt; top:74.04pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:362.7pt; top:28.05pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:362.7pt; top:43.38pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:362.7pt; top:58.71pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:362.7pt; top:74.04pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:395.9pt; top:28.05pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:395.9pt; top:43.38pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:395.9pt; top:58.71pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:395.9pt; top:74.04pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:431.15pt; top:28.05pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:431.15pt; top:43.38pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:431.15pt; top:58.71pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:431.15pt; top:74.04pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:326.75pt; top:102.77pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:326.75pt; top:118.1pt; width:0pt; height:25.79pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:326.75pt; top:144.39pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:326.75pt; top:159.72pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:326.75pt; top:175.05pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:326.75pt; top:190.38pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:326.75pt; top:205.71pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:326.75pt; top:221.04pt; width:0pt; height:24.62pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:326.75pt; top:246.16pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:326.75pt; top:261.49pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:326.75pt; top:276.82pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:326.75pt; top:292.15pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:326.75pt; top:307.48pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:326.75pt; top:322.81pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:326.75pt; top:338.14pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:326.75pt; top:353.47pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:326.75pt; top:368.8pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:326.75pt; top:384.13pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:326.75pt; top:399.46pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:326.75pt; top:414.79pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:362.7pt; top:102.77pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:362.7pt; top:118.1pt; width:0pt; height:25.79pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:362.7pt; top:144.39pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:362.7pt; top:159.72pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:362.7pt; top:175.05pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:362.7pt; top:190.38pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:362.7pt; top:205.71pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:362.7pt; top:221.04pt; width:0pt; height:24.62pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:362.7pt; top:246.16pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:362.7pt; top:261.49pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:362.7pt; top:276.82pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:362.7pt; top:292.15pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:362.7pt; top:307.48pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:362.7pt; top:322.81pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:362.7pt; top:338.14pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:362.7pt; top:353.47pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:362.7pt; top:368.8pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:362.7pt; top:384.13pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:362.7pt; top:399.46pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:362.7pt; top:414.79pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:395.9pt; top:102.77pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:395.9pt; top:118.1pt; width:0pt; height:25.79pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:395.9pt; top:144.39pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:395.9pt; top:159.72pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:395.9pt; top:175.05pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:395.9pt; top:190.38pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:395.9pt; top:205.71pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:395.9pt; top:221.04pt; width:0pt; height:24.62pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:395.9pt; top:246.16pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:395.9pt; top:261.49pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:395.9pt; top:276.82pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:395.9pt; top:292.15pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:395.9pt; top:307.48pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:395.9pt; top:322.81pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:395.9pt; top:338.14pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:395.9pt; top:353.47pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:395.9pt; top:368.8pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:395.9pt; top:384.13pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:395.9pt; top:399.46pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:395.9pt; top:414.79pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:431.15pt; top:102.77pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:431.15pt; top:118.1pt; width:0pt; height:25.79pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:431.15pt; top:144.39pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:431.15pt; top:159.72pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:431.15pt; top:175.05pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:431.15pt; top:190.38pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:431.15pt; top:205.71pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:431.15pt; top:221.04pt; width:0pt; height:24.62pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:431.15pt; top:246.16pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:431.15pt; top:261.49pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:431.15pt; top:276.82pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:431.15pt; top:292.15pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:431.15pt; top:307.48pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:431.15pt; top:322.81pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:431.15pt; top:338.14pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:431.15pt; top:353.47pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:431.15pt; top:368.8pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:431.15pt; top:384.13pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:431.15pt; top:399.46pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:431.15pt; top:414.79pt; width:0pt; height:14.83pt; border-left:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:-0.25pt; top:0pt; width:468.1pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:0.25pt; top:15.33pt; width:467.1pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:0.25pt; top:27.55pt; width:467.1pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:0.25pt; top:42.88pt; width:467.1pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:0.25pt; top:58.21pt; width:467.1pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:0.25pt; top:73.54pt; width:467.1pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:0.25pt; top:88.87pt; width:467.1pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:0.25pt; top:102.27pt; width:467.1pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:0.25pt; top:117.6pt; width:467.1pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:0.25pt; top:143.89pt; width:467.1pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:0.25pt; top:159.22pt; width:467.1pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:0.25pt; top:174.55pt; width:467.1pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:0.25pt; top:189.88pt; width:467.1pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:0.25pt; top:205.21pt; width:467.1pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:0.25pt; top:220.54pt; width:467.1pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:0.25pt; top:245.66pt; width:467.1pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:0.25pt; top:260.99pt; width:467.1pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:0.25pt; top:276.32pt; width:467.1pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:0.25pt; top:291.65pt; width:467.1pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:0.25pt; top:306.98pt; width:467.1pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:0.25pt; top:322.31pt; width:467.1pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:0.25pt; top:337.64pt; width:467.1pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:0.25pt; top:352.97pt; width:467.1pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:0.25pt; top:368.3pt; width:467.1pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:0.25pt; top:383.63pt; width:467.1pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:0.25pt; top:398.96pt; width:467.1pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:0.25pt; top:414.29pt; width:467.1pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
						<div class="wcdiv" style="left:-0.25pt; top:429.62pt; width:468.1pt; height:0pt; border-top:solid 0.75pt #000000;">
						</div>
					</div>
					<div class="wcdiv" style="top:589.4pt;">
						<span class="wcspan wctext001" style="font-size:11pt; left:0pt; top:0pt; line-height:12.9pt;">Is the activity interesting to you?</span>
						<span class="wcspan wctext001" style="font-size:11pt; left:216pt; top:0pt; line-height:12.9pt;">Yes  </span>
						<span class="wcspan wctext001" style="font-size:11pt; left:288pt; top:0pt; line-height:12.9pt;">No  </span>
					</div>
					<div class="wcdiv" style="top:608.74pt;">
						<span class="wcspan wctext001" style="font-size:11pt; left:0pt; top:0pt; line-height:12.9pt;">What do you intend to do after this activity? <input type="text" class="custom-input" style="width: 340px;"></span>
					</div>
					<div class="wcdiv" style="top:628.08pt;">
						<span class="wcspan wctext001" style="font-size:11pt; left:0pt; top:0pt; line-height:12.9pt;">What trainings are you willing to attend in the future? <input type="text" class="custom-input" style="width: 278px;"></span>
					</div>
					<div class="wcdiv" style="top:647.43pt;">
						<span class="wcspan wctext001" style="font-size:11pt; left:0pt; top:0pt; line-height:12.9pt;">Comments and Suggestions</span>
						<span class="wcspan wctext005" style="font-size:11pt; left:128.72pt; top:0pt; line-height:12.9pt;"> (Please write your comments for improvements and future endeavors)</span>
						<span class="wcspan wctext001" style="font-size:11pt; left:451.09pt; top:0pt; line-height:12.9pt;">:</span>
					</div>
					<div class="wcdiv" style="top:666.77pt;">
						<span class="wcspan wctext001" style="font-size:11pt; left:0pt; top:0pt; line-height:12.9pt;"><input type="text" class="custom-input" style="width: 618px;"></span>
						<span class="wcspan wctext001" style="font-size:11pt; left:0pt; top:14.83pt; line-height:12.9pt;"><input type="text" class="custom-input" style="width: 618px;margin-top: 10px"></span>
					</div>
				</div>
				<div class="wcdiv" style="left:308pt; top:710pt;">
					<div class="wcdiv" style="left:-0.75pt; top:-0.75pt; width:32px; height:29px;">
						<object type="image/svg+xml" data="1705432384_evaluation-form/1705432384_evaluation-form-5.svg"></object>
					</div>
					<div class="wcdiv" style="clip:rect(4.35pt,21.75pt,17.15pt,0.75pt);">
						<div class="wcdiv" style="left:3.95pt; top:3.35pt;">
							<span class="wcspan wctext002" style="font-size:11pt; left:-0.38pt; top:1pt; line-height:13.43pt;"><input class="ckbx" style="height:17px" type="radio" name="interesting"></span>
						</div>
					</div>
				</div>
				<div class="wcdiv" style="left:378pt; top:710pt;">
					<div class="wcdiv" style="left:-0.75pt; top:-0.75pt; width:32px; height:29px;">
						<object type="image/svg+xml" data="1705432384_evaluation-form/1705432384_evaluation-form-5.svg"></object>
					</div>
					<div class="wcdiv" style="clip:rect(4.35pt,21.75pt,17.15pt,0.75pt);">
						<div class="wcdiv" style="left:-0.38pt; top:4.35pt;">
							<span class="wcspan wctext002" style="font-size:11pt; left:4pt; top:0pt; line-height:13.43pt;"><input class="ckbx" style="height:17px" type="radio" name="interesting"></span>
						</div>
					</div>
				</div>
			</div>
			<div class="wcdiv" style="left:426pt; top:950pt;margin-bottom: 2em">
				<span class="wcspan wctext002" style="font-size:11pt; left:4pt; top:0pt; line-height:13.43pt;"><input class="submit-btn" type="button" value="Submit"></span>
			</div>
			<input type="hidden" id="idVideo" value="<?php echo $_GET['id']; ?>">
			<input type="hidden" id="idUser" value="<?php echo $_GET['idUser']; ?>">

		</form>
</body>
<script>
	$('.submit-btn').on('click',function(){	
		var values = {
			'idVideo': document.getElementById('idVideo').value,
			'idUser': document.getElementById('idUser').value,
		};
		$.ajax({
			url: "admin/ajax.php?action=save_evaluation",
			type: "POST",
			data: values,
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully submitted",'success')
					setTimeout(function(){
						var id = $('#idVideo').val();
						var idUser = $('#idUser').val();
						location.href ="index.php?page=view_video&id="+id+"&idUser="+idUser;
					},1500)
				}else if(resp==2){
					var id = $('#idVideo').val();
					var idUser = $('#idUser').val();
					location.href ="index.php?page=view_video&id="+id+"&idUser="+idUser;
				}
			}
		});
	})
</script>
</html>