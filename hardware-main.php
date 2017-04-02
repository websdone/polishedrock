<?php require_once( 'cms/cms.php' ); ?>	


<cms:template title="hardware_blocks"  clonable='1'>
	<cms:editable name="hardware_id" desc="write 1 word description + 1 - Example='quiz1'" type="text" group="hardware_group" />
	<cms:editable name="hardware_id2" desc="write 1 word description + 2 - Example='quiz2'" type="text" group="hardware_group" />
	<cms:editable name="hardware_image" type="image" group="hardware_group" /> <!-- groups them as one -->
	<cms:editable name="hardware_desc" desc="Hardware short description" type="richtext" group="hardware_group" >
			<p>24/7 Usage</p>
			<p>Portrait or Landscape</p>
			<p>High Definition Display</p>
			<p>Multiple AV Inputs</p>
			<p>Sunlight Readable</p>
			<p>Plug and Play Media Player</p>
	</cms:editable>
	<cms:editable name="hardware_title" desc="Hardware title" type="text" group="hardware_group" />
	<cms:editable name="hardwarespecification" desc="specification ** please use bulleted list - left column" type="richtext" group="hardware_group" >	
		<p>Diagonal Size (inch): 32&quot;</p>
		<p>Panel Resolution (px): 1366x768</p>
		<p>Display Area (mm): 699x393</p>
		<p>Pixel Pitch:&nbsp;0.10725x0.51075</p>
		<p>Unit Size (WxHxD mm): 767.6x457.6x81.3</p>
		<p>VESA Holes (mm):&nbsp;400x200</p>
		<p>Net Weight (kg):&nbsp;14.1</p>
		<p>Brightness (cd/m2): 1500</p>
		<p>Colour: 16.7M</p>

	</cms:editable>
	<cms:editable name="hardwarespecification2" desc="specification ** please use bulleted list - right column" type="richtext" group="hardware_group">
		<p>Viewing Angle: 178&deg;</p>
		<p>Contrast Ratio: 4000:1</p>
		<p>Power Consumption (W): 180</p>
		<p>Input Voltage: AC110-240V(50Hz-60Hz)</p>
		<p>AV Signal Inputs: HDMI, VGA , Audio Socket (3.5mm)</p>
		<p>Audio: 2x2W, 4&Omega;</p>
		<p>Accessories:&nbsp;Remote Control, User Manual, Power Lead</p>
	</cms:editable>	
	<cms:editable name="hardwareviewmore" desc="** Write 'view more' or ignore if no specifications" type="richtext" group="hardware_group">
		<p> More details </p>
	</cms:editable>
	<cms:editable name="hardwareprice" desc="Price" type="text" group="hardware_group" />
	<cms:editable name='my_document' label='Downloadable specifications file' desc='Upload the file here' type='file'  group="hardware_group"/>
	<cms:editable name='screensize' label='Screen size' desc='Please add only the width that will be use to decided bigger or smaller' type='text'  group="hardware_group"/>
	<cms:editable name='contact' desc='unique id for contact - used to open correct collapse form' type='text'  group="hardware_group"/>
	<cms:editable name='category_id' label='write in where it should be sorted : touchscreen - nontouch - mounts - clearance' desc='category for sorting/filtering' type='text' group="hardware_group" />
	<cms:editable name='gallery_id' label='write one word id name of gallery different from any other you create' type='text' group="hardware_group" />
	<cms:repeatable name='my_multiple_images' >
	    <cms:editable type='image' name='full_image' label='Full image' />
	    <cms:editable type='image' name='thumb_image' label='Thumb image' />
	</cms:repeatable>
</cms:template>

<cms:embed "header.html" />

<?php COUCH::invoke(); ?>

	</body>
</html>

