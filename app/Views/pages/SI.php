<?= $this->extend('Layout/template'); ?>
<?= $this->extend('Layout/navbar'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid" style="background-image:url('/img/backgroundtech.jpg'); min-height:50vh; background-size:cover;">
    <div class="row">
        <div class="col" style="margin-left:25px; position:absolute; top:40%;">
            <h1 class="text-light">Information Systems</h1>
        </div>
    </div>
</div>
<div class="container-fluid py-3">
    <div class="row">
        <div class="col-md-6">
            <h1>Information Systems</h1>
            <p>Our curriculum provides an in-depth study of how to manage information as a resource, bridging the gap between users and technology to support organizational and business goals through the development and implementation of information systems. You will be equipped with management, business, accounting, web & interface design, and organizational communication courses to prepare you to meet the demands of the constantly evolving ICT (Information and Communication and Technology) market. Here are the specializations of our study program:</p>
            <ul>
                <li>Technopreneurship</li>
                <li>Web and Mobile Development</li>
            </ul>
        </div>
        <div class="col-md-6 text-center">
            <img src="/img/Si1.jpg" alt="" style="width:600px; height:300px; top:10%;">
        </div>
    </div>
</div>
<div class="container-fluid py-3">
    <div class="row">
        <div class="col-md-6">
            <h1>Graduate Profile</h1>
            <p>A graduate who is:</p>
            <ul>
                <li>Able to conceptualize the tech products. </li>
                <li>Able to develop business processes of tech/digital services and products. </li>
                <li>Able to utilize targeted digital marketing platforms/applications to effectively market these services and product. </li>
                <li>Able to integrate knowledge of project management, web engineering, database management, data analysis, and decision support system. </li>
                <li>Able to develop web and mobile applications to meet the demands of the constantly evolving ICT.</li>
            </ul>
        </div>
        <div class="col-md-6 text-center">
            <img src="/img/Si2.jpg" alt="" style="width:500px; height:250px; top:10%;">
        </div>
    </div>
</div>
<div class="container-fluid py-3">
    <div class="row">
        <div class="col-md-6">
            <h1>What will i learn.</h1>
            <p>You will learn things related to information systems, such as:</p>
            <ul>
                <li>Processing information data for business purposes </li>
                <li>Managing information systems within the company </li>
                <li>Create web and cellular programs </li>
                <li>Information system strategy planning </li>
                <li>Business application programming </li>
            </ul>
        </div>
        <div class="col-md-6">
            <h1>What Will I Become.</h1>
            <p>Here are several career choices & prospective jobs for Information Systems graduates:</p>
            <ul>
                <li>Web & Mobile Developer </li>
                <li>IT Consultant and/or Auditor </li>
                <li>Multimedia / User Interface Designer </li>
                <li>Business Analyst </li>
                <li>System Analyst in a variety of sectors (corporate, government, non-profit organization, etc.)</li>
            </ul>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>