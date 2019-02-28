<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=eme_school;charset=utf8','root','password');
?>
<!DOCTYPE html>
<html>
<head>
  <title>EME - Formations</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/menu.css">
  <link rel="stylesheet" type="text/css" href="css/formations.css">
</head>
<body>
<?php
  include 'includes/menu.php';
?>
<div id="sub_menu_ul">
  <span class="sub_menu_li"><a href="formations.php" class="sub_menu_li">Les Cursus</a></span>
  <span class="sub_menu_li"><a href="bacprosen.php" class="sub_menu_li">BAC Pro. SEN</a></span>
  <span class="sub_menu_li"><a href="bacsti2d.php" class="sub_menu_li">BAC STi2D</a></span>
  <span class="sub_menu_li"><a href="btssn.php" class="sub_menu_li">BTS SN</a></span>
  <span class="sub_menu_li" style="background-color: #4169E1;"><a href="reussite.php" class="sub_menu_li" style="background-color: #4169E1;color:white">Taux de réussite</a></span>
</div>
<div>
  <br />
  <br />
  <br />
  <div style="border: 1px solid black;text-align: center;max-width: 800px;margin-left: 20%;margin-top:90px;">
    <h2>Taux de Réussite</h2>
    <img src="img/taux_reussite.png" style="width: 250px;height: 220px;">
    <div style="padding: 20px;font-size: 18px">
      <h3>Pourcentages de réussite aux examens - 10 dernières années:</h3>
        <table border="1" bordercolor="#105E00" cellpadding="0" cellspacing="0" height="148" width="677" style="border-collapse: collapse;margin-left: auto;margin-right: auto;">
          <tbody>
            <tr>
              <th height="19" nowrap="nowrap" width="87"></th>

                <td height="19" width="47" align="center" background="../images/mosa.jpg"><span class="legendepetitgras1">2009</span></td>
                <td height="19" width="47" align="center" background="../images/mosa.jpg"><span class="legendepetitgras1">2010</span></td>
                <td height="19" width="47" align="center" background="../images/mosa.jpg"><span class="legendepetitgras1">2011</span></td>
                <td height="19" width="47" align="center" background="../images/mosa.jpg"><span class="legendepetitgras1">2012</span></td>
                <td height="19" width="47" align="center" background="../images/mosa.jpg"><span class="legendepetitgras1">2013</span></td>
                <td height="19" width="47" align="center" background="../images/mosa.jpg"><span class="legendepetitgras1">2014</span></td>
                <td height="19" width="47" align="center" background="../images/mosa.jpg"><span class="legendepetitgras1">2015</span></td>
                <td height="19" width="47" align="center" background="../images/mosa.jpg"><span class="legendepetitgras1">2016</span></td>
                <td height="19" width="47" align="center" background="../images/mosa.jpg"><span class="legendepetitgras1">2017</span></td>
                <td height="19" width="47" align="center" background="../images/mosa.jpg"><span class="legendepetitgras1">2018</span></td>

                <td height="19" width="92" align="center" background="../images/mosa.jpg"><span class="legendepetitgras1">Moyennes</span></td>
              </tr>
              <tr>
                <td height="33" width="87" align="center" background="../images/mosa.jpg"><span class="legendepetitgras1">BEP SN</span></td>

                <td height="33" width="47" align="center">89</td>
                    
                <td class="legendepetitgras1" align="center" height="33" valign="middle" width="47">92</td>
                <td class="legendepetitgras1" align="center" height="33" valign="middle" width="47">91</td>
                <td class="legendepetitgras1" align="center" height="33" valign="middle" width="47">97</td>
                <td class="legendepetitgras1" align="center" height="33" valign="middle" width="47">100</td>
                <td class="legendepetitgras1" height="33" valign="middle" width="47" align="center">94</td>
                <td class="legendepetitgras1" height="33" valign="middle" width="47" align="center">96</td>
                <td class="legendepetitgras1" align="center" height="33" valign="middle" width="47">90</td>
                <td class="legendepetitgras1" height="33" valign="middle" width="47" align="center">91,5</td>
                <td class="legendepetitgras1" align="center" height="33" valign="middle" width="47">100</td>
                    
                <td height="33" width="92" align="center" background="../images/mosa.jpg"><span class="legendepetitgras1">94 %</span></td>
                  
              </tr>
              <tr>
                <td height="33" width="87" align="center" background="../images/mosa.jpg"><span class="legendepetitgras1">Bac Pro. SN</span></td>          
              
                <td height="33" width="47" align="center">93</td>  
                
                <td class="legendepetitgras1" align="center" height="33" valign="middle" width="47">81</td>
                <td class="legendepetitgras1" align="center" height="33" valign="middle" width="47">88</td>
                <td class="legendepetitgras1" align="center" height="33" valign="middle" width="47">84</td>
                <td class="legendepetitgras1" align="center" height="33" valign="middle" width="47">83</td>
                <td class="legendepetitgras1" height="33" valign="middle" width="47" align="center">90</td>
                <td class="legendepetitgras1" align="center" height="33" valign="middle" width="47">89</td>
                <td class="legendepetitgras1" height="33" valign="middle" width="47" align="center">96</td>
                <td class="legendepetitgras1" height="33" valign="middle" width="47" align="center">94</td>
                <td class="legendepetitgras1" align="center" height="33" valign="middle" width="47">93</td>
                <td height="33" width="92" align="center" background="../images/mosa.jpg"><span class="legendepetitgras1">89 %</span></td>
              </tr>
              <tr>
                <td height="33" width="87" align="center" background="../images/mosa.jpg"><span class="legendepetitgras1">Bac STI2D</span></td>       
                      
                <td height="33" width="47" align="center">73</td>            

                <td class="legendepetitgras1" align="center" height="33" valign="middle" width="47">76</td>
                <td class="legendepetitgras1" align="center" height="33" valign="middle" width="47">67</td>
                <td class="legendepetitgras1" align="center" height="33" valign="middle" width="47">81</td>
                <td class="legendepetitgras1" align="center" height="33" valign="middle" width="47">100</td>
                <td class="legendepetitgras1" height="33" valign="middle" width="47" align="center">100</td>
                <td class="legendepetitgras1" align="center" height="33" valign="middle" width="47">100</td>
                <td class="legendepetitgras1" height="33" valign="middle" width="47" align="center">91</td>
                <td class="legendepetitgras1" height="33" valign="middle" width="47" align="center">100</td>
                <td class="legendepetitgras1" align="center" height="33" valign="middle" width="47">100</td>
                
                <td height="33" width="92" align="center" background="../images/mosa.jpg"><span class="legendepetitgras1">89 %</span></td>
              </tr>
              <tr>
                <td height="33" width="87" align="center" background="../images/mosa.jpg"><span class="legendepetitgras1">BTS SN</span></td>
                            
                <td class="legendepetitgras1" align="center" height="33" valign="middle" width="47">79</td>
                <td class="legendepetitgras1" align="center" height="33" valign="middle" width="47">57</td>
                <td class="legendepetitgras1" align="center" height="33" valign="middle" width="47">86</td>
                <td class="legendepetitgras1" align="center" height="33" valign="middle" width="47">74</td>
                <td class="legendepetitgras1" align="center" height="33" valign="middle" width="47">86</td>
                <td class="legendepetitgras1" height="33" valign="middle" width="47" align="center">100</td>
                <td class="legendepetitgras1" height="33" valign="middle" width="47" align="center">66</td>
                <td class="legendepetitgras1" height="33" valign="middle" width="47" align="center">65</td>
                <td class="legendepetitgras1" height="33" valign="middle" width="47" align="center">87</td>
                <td class="legendepetitgras1" height="33" valign="middle" width="47" align="center">93</td>
              
            <td height="33" width="92" align="center" background="../images/mosa.jpg"><span class="legendepetitgras1">79 %</span></td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
  </div>
</body>
</html>