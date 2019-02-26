<?php
@session_start();
if(@$_SESSION['loginCheck'] != 1)
{
	header('Location:index.php');
	exit();
}
?>

<html>
<head>
	<title>Add Students - Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="add_subjects.css">
	<script type="text/javascript" src="validation.js"></script>
</head>
<body>
	<div id="container">
	<svg version="1.1" id="icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 viewBox="-164 339.5 512 512" style="enable-background:new -164 339.5 512 512;" xml:space="preserve">
	<style type="text/css">
		.st0{fill:#8DC63F;}
		.st1{clip-path:url(#SVGID_2_);fill:#FFFFFF;}
		.st2{opacity:0.7;clip-path:url(#SVGID_4_);}
		.st3{fill:#8299CE;}
		.st4{opacity:0.7;clip-path:url(#SVGID_6_);}
		.st5{opacity:0.7;clip-path:url(#SVGID_8_);}
		.st6{opacity:0.7;clip-path:url(#SVGID_10_);}
		.st7{opacity:0.7;clip-path:url(#SVGID_12_);}
		.st8{opacity:0.7;clip-path:url(#SVGID_14_);}
		.st9{opacity:0.7;clip-path:url(#SVGID_16_);}
		.st10{opacity:0.7;clip-path:url(#SVGID_18_);}
		.st11{opacity:0.7;clip-path:url(#SVGID_20_);}
		.st12{fill:#F1AAAF;}
		.st13{opacity:0.2;enable-background:new    ;}
		.st14{opacity:0.5;fill:#F1AAAF;enable-background:new    ;}
		.st15{fill:#E44F50;}
		.st16{fill:#FFDD00;}
		.st17{fill:#E44F50;enable-background:new    ;}
		.st18{opacity:0.5;fill:#E44F50;enable-background:new    ;}
		.st19{opacity:0.5;fill:#FFDD00;enable-background:new    ;}
		.st20{fill:#AFB6DC;}
		.st21{fill:#AFB6DC;enable-background:new    ;}
		.st22{fill:#8299CE;enable-background:new    ;}
		.st23{fill:#F5BA3D;}
		.st24{opacity:0.5;fill:#BF912F;enable-background:new    ;}
		.st25{opacity:0.2;fill:#F5BA3D;enable-background:new    ;}
		.st26{opacity:0.6;}
		.st27{fill:none;stroke:#F5BA3D;stroke-width:4;stroke-linecap:round;stroke-miterlimit:10;}
	</style>
	<g id="Layer_1_1_">
		<circle class="st0" cx="86.2" cy="601.8" r="243"/>
	</g>
	<g id="Layer_2">
		<g id="Favorite">
		</g>
		<g>
			<g>
				<g>
					<g>
						<defs>
							<circle id="SVGID_1_" cx="86.2" cy="601.8" r="243"/>
						</defs>
						<clipPath id="SVGID_2_">
							<use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
						</clipPath>
						<rect x="-164" y="582.1" class="st1" width="388.7" height="401.9"/>
					</g>
				</g>
				<g>
					<g>
						<defs>
							<circle id="SVGID_3_" cx="86.2" cy="601.8" r="243"/>
						</defs>
						<clipPath id="SVGID_4_">
							<use xlink:href="#SVGID_3_"  style="overflow:visible;"/>
						</clipPath>
						<g class="st2">
							<rect x="29.6" y="610.4" class="st3" width="166.7" height="26.6"/>
						</g>
					</g>
				</g>
				<g>
					<g>
						<defs>
							<circle id="SVGID_5_" cx="86.2" cy="601.8" r="243"/>
						</defs>
						<clipPath id="SVGID_6_">
							<use xlink:href="#SVGID_5_"  style="overflow:visible;"/>
						</clipPath>
						<g class="st4">
							<rect x="-154.6" y="655.9" class="st3" width="350.9" height="8.4"/>
						</g>
					</g>
				</g>
				<g>
					<g>
						<defs>
							<circle id="SVGID_7_" cx="86.2" cy="601.8" r="243"/>
						</defs>
						<clipPath id="SVGID_8_">
							<use xlink:href="#SVGID_7_"  style="overflow:visible;"/>
						</clipPath>
						<g class="st5">
							<rect x="-154.6" y="675.7" class="st3" width="350.9" height="8.4"/>
						</g>
					</g>
				</g>
				<g>
					<g>
						<defs>
							<circle id="SVGID_9_" cx="86.2" cy="601.8" r="243"/>
						</defs>
						<clipPath id="SVGID_10_">
							<use xlink:href="#SVGID_9_"  style="overflow:visible;"/>
						</clipPath>
						<g class="st6">
							<rect x="-154.6" y="698.4" class="st3" width="350.9" height="8.4"/>
						</g>
					</g>
				</g>
				<g>
					<g>
						<defs>
							<circle id="SVGID_11_" cx="86.2" cy="601.8" r="243"/>
						</defs>
						<clipPath id="SVGID_12_">
							<use xlink:href="#SVGID_11_"  style="overflow:visible;"/>
						</clipPath>
						<g class="st7">
							<rect x="-154.6" y="721.1" class="st3" width="350.9" height="8.4"/>
						</g>
					</g>
				</g>
				<g>
					<g>
						<defs>
							<circle id="SVGID_13_" cx="86.2" cy="601.8" r="243"/>
						</defs>
						<clipPath id="SVGID_14_">
							<use xlink:href="#SVGID_13_"  style="overflow:visible;"/>
						</clipPath>
						<g class="st8">
							<rect x="-154.6" y="743.8" class="st3" width="261.9" height="8.4"/>
						</g>
					</g>
				</g>
				<g>
					<g>
						<defs>
							<circle id="SVGID_15_" cx="86.2" cy="601.8" r="243"/>
						</defs>
						<clipPath id="SVGID_16_">
							<use xlink:href="#SVGID_15_"  style="overflow:visible;"/>
						</clipPath>
						<g class="st9">
							<rect x="-154.6" y="792" class="st3" width="350.9" height="8.4"/>
						</g>
					</g>
				</g>
				<g>
					<g>
						<defs>
							<circle id="SVGID_17_" cx="86.2" cy="601.8" r="243"/>
						</defs>
						<clipPath id="SVGID_18_">
							<use xlink:href="#SVGID_17_"  style="overflow:visible;"/>
						</clipPath>
						<g class="st10">
							<rect x="-154.6" y="811.8" class="st3" width="350.9" height="8.4"/>
						</g>
					</g>
				</g>
				<g>
					<g>
						<defs>
							<circle id="SVGID_19_" cx="86.2" cy="601.8" r="243"/>
						</defs>
						<clipPath id="SVGID_20_">
							<use xlink:href="#SVGID_19_"  style="overflow:visible;"/>
						</clipPath>
						<g class="st11">
							<rect x="-154.6" y="834.5" class="st3" width="350.9" height="8.4"/>
						</g>
					</g>
				</g>
			</g>
			<path class="st12" d="M70.6,425.7l-13.2,21.5c-1.4,2.2-4.5,2.8-6.9,1.3l-32.1-19.7c-2.5-1.5-3.3-4.5-2-6.8l13.2-21.5
				c1.4-2.2,4.5-2.8,6.9-1.3L68.6,419C71,420.5,71.9,423.5,70.6,425.7z"/>
			<g>
				<polygon class="st13" points="-73.2,581.4 -99.3,582.2 -130.8,640.3 -124.3,697.4 			"/>
			</g>
			<path class="st14" d="M41.8,402.5l-18.1,29.6l-5.3-3.2c-2.5-1.5-3.3-4.5-2-6.8l13.2-21.5c1.4-2.2,4.5-2.8,6.9-1.3L41.8,402.5z"/>
			
				<rect x="-157" y="525.4" transform="matrix(0.5228 -0.8524 0.8524 0.5228 -484.3472 233.5997)" class="st15" width="246.9" height="48.1"/>
			<polygon class="st16" points="-77.8,667.1 -120.7,691.6 -118.4,642.2 		"/>
			
				<rect x="-171.5" y="533.5" transform="matrix(0.5228 -0.8524 0.8524 0.5228 -483.6823 216.9484)" class="st17" width="246.9" height="14"/>
			
				<rect x="-142.5" y="551.2" transform="matrix(0.5228 -0.8524 0.8524 0.5228 -485.0049 250.1201)" class="st18" width="246.9" height="14.2"/>
			<polygon class="st19" points="-120.7,691.6 -118.4,642.2 -106.7,649.4 		"/>
			<polygon class="st19" points="-77.8,667.1 -120.7,691.6 -89.7,659.8 		"/>
			<path class="st20" d="M59.5,449l-4.3,7c-1.5,2.5-4.7,3.2-7.2,1.7l-36.6-22.4c-2.5-1.5-3.2-4.7-1.7-7.2l4.3-7
				c1.5-2.5,4.7-3.2,7.2-1.7l36.6,22.4C60.2,443.3,61,446.6,59.5,449z"/>
			<path class="st21" d="M25.8,422.2L16,438.1l-4.6-2.8c-2.5-1.5-3.2-4.7-1.7-7.2l4.3-7c1.5-2.5,4.7-3.2,7.2-1.7L25.8,422.2z"/>
			<g>
				<polygon class="st3" points="-111.6,686.4 -124.3,697.4 -120.3,681 			"/>
				<polygon class="st22" points="-111.6,686.4 -124.3,697.4 -120.3,681 			"/>
			</g>
			<g>
				<path class="st13" d="M168.3,582.2L-81.8,777.4c-7.7-7.4-14.9-15.3-21.6-23.6c-4.1-5.1-8.1-10.5-11.8-15.9c0,0,0,0,0,0
					c0,0,0,0,0,0s0,0,0,0c-1.2-1.7-2.3-3.5-3.4-5.2c-1-1.5-1.9-3-2.8-4.5c-1.9-3.1-3.7-6.2-5.4-9.3L48,582.2H168.3L168.3,582.2z"/>
			</g>
			<g>
				<path class="st23" d="M335.1,465.5L302.5,491L-73.8,784.7c-2.7-2.4-5.4-4.8-8-7.3c-7.7-7.4-14.9-15.3-21.6-23.6
					c-4.1-5.1-8-10.5-11.8-15.9c0,0,0,0,0,0c0,0,0,0,0,0c-1.2-1.7-2.3-3.5-3.5-5.3c-1-1.5-1.9-3-2.8-4.5L65.3,582.2L259,431
					l30.6-23.9l3.3,4.2l16,20.4L335.1,465.5z"/>
				<path class="st24" d="M335.1,465.5L302.5,491L-73.8,784.7c-2.7-2.4-5.4-4.8-8-7.3c-7.7-7.4-14.9-15.3-21.6-23.6
					c-4.1-5.1-8-10.5-11.8-15.9c0,0,0,0,0,0c0,0,0,0,0,0c-1.2-1.7-2.3-3.5-3.5-5.3c-1-1.5-1.9-3-2.8-4.5L65.3,582.2L259,431
					l30.6-23.9l3.3,4.2l16,20.4L335.1,465.5z"/>
			</g>
			<path class="st23" d="M338.4,469.7l-33.5,26.1L-69.7,788.3c-1.4-1.2-2.8-2.4-4.2-3.5c-2.7-2.4-5.4-4.8-8-7.3
				c-7.7-7.4-14.9-15.3-21.6-23.6c-4.1-5.1-8.1-10.5-11.8-15.9c0,0,0,0,0,0c0,0,0,0,0,0c-1.2-1.7-2.3-3.5-3.5-5.3L74,582.2
				l188.7-147.3l30.1-23.5l16,20.4l26.3,33.7L338.4,469.7z"/>
			<path class="st25" d="M308.8,431.8l-22.5,17.6l-6.8,5.3l-13.7,10.7l-20.5,16l-20.5,16l-20.5,16l-20.5,16l-20.5,16l-20.5,16
				l-20.5,16l-6.1,4.8l-14.4,11.2l-20.5,16l-20.5,16l-20.5,16l-20.5,16l-41,32l-20.5,16l-20.5,16l-20.5,16l-20.5,16l-0.4,0.3
				c-4.1-5.1-8.1-10.5-11.8-15.9c-1.2-1.8-2.3-3.5-3.5-5.3L74,582.2l188.7-147.3l30.1-23.5L308.8,431.8z"/>
			<g class="st26">
				<g>
					<line class="st27" x1="272.7" y1="431.9" x2="292.6" y2="457.5"/>
				</g>
				<g>
					<line class="st27" x1="252.2" y1="447.9" x2="272.1" y2="473.5"/>
				</g>
				<g>
					<line class="st27" x1="231.7" y1="463.9" x2="251.6" y2="489.5"/>
				</g>
				<g>
					<line class="st27" x1="211.2" y1="479.9" x2="231.2" y2="505.5"/>
				</g>
				<g>
					<line class="st27" x1="190.7" y1="495.9" x2="210.7" y2="521.5"/>
				</g>
				<g>
					<line class="st27" x1="170.2" y1="511.9" x2="190.2" y2="537.5"/>
				</g>
				<g>
					<line class="st27" x1="149.7" y1="527.9" x2="169.7" y2="553.5"/>
				</g>
				<g>
					<line class="st27" x1="129.2" y1="543.9" x2="149.2" y2="569.5"/>
				</g>
				<g>
					<line class="st27" x1="108.7" y1="560" x2="128.7" y2="585.5"/>
				</g>
				<g>
					<line class="st27" x1="88.3" y1="576" x2="108.2" y2="601.5"/>
				</g>
				<g>
					<line class="st27" x1="67.8" y1="592" x2="87.7" y2="617.5"/>
				</g>
				<g>
					<line class="st27" x1="47.3" y1="608" x2="67.2" y2="633.5"/>
				</g>
				<g>
					<line class="st27" x1="26.8" y1="624" x2="46.8" y2="649.5"/>
				</g>
				<g>
					<line class="st27" x1="6.3" y1="640" x2="26.3" y2="665.5"/>
				</g>
				<g>
					<line class="st27" x1="-14.2" y1="656" x2="5.8" y2="681.6"/>
				</g>
				<g>
					<line class="st27" x1="-34.7" y1="672" x2="-14.7" y2="697.6"/>
				</g>
				<g>
					<line class="st27" x1="-55.2" y1="688" x2="-35.2" y2="713.6"/>
				</g>
				<g>
					<line class="st27" x1="-75.7" y1="704" x2="-55.7" y2="729.6"/>
				</g>
				<g>
					<line class="st27" x1="-96.1" y1="720" x2="-76.2" y2="745.6"/>
				</g>
			</g>
		</g>
	</g>
	</svg>
	<form method="post" action="add_subjects_successful.php">
		<p>Subject ID:</p>
		<input type="text" name="s_id" id="subject_id" readonly>
		<p>Subject Fee (&#x20B9;):</p>
		<input type="text" name="fee" required pattern="[1-9]\d*" title="No decimal. Positive numbers only.">
		<p>Subject Name:</p>
		<input type="text" name="sub_name" required pattern="([A-Z][A-Za-z ,.'`-]{1,40})" title="Name of the Subject.">
		<script type="text/javascript">
			<?php
			$subjectlist = file ('subjects.txt');
			foreach ($subjectlist as $subject) {
				$subject_details = explode('|', $subject);
			}
			$id = substr($subject_details[0], -1);
			$id = $id + 1;
			?> 
			document.getElementById('subject_id').value = "<?php echo "s".$id; ?>";
		</script>
		<input type="submit"  class="myButton" value="Add Subject">
	</form>

	<form action="admin.php" method="post">
			<input id="back" class="myButton" type="submit" value="Back">
	</form>
	</div>
</body>

</html>