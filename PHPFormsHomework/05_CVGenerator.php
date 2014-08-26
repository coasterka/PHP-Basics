<?php
    $amount = "";
    $currency = "";
    $interest = "";
    $period = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST'):
        // Personal Information
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $birth = $_POST['birth'];
        $nationality = $_POST['nationality'];
        // Last Work Position
        $compName = $_POST['compName'];
        $workDateStart = $_POST['workDateStart'];
        $workDateEnd = $_POST['workDateEnd'];
        // Computer Skills
        
        //Other Skills
    endif;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Problem 05 - CV Generator</title>
        <meta charset="UTF-8" />
        <link type="text/css" rel="stylesheet" href="styles/05_CVGenerator.css" />
    </head>
    <body>
        <form method="post" action="">
            <fieldset>
                <legend>Personal Information</legend>
                <input type="text" name="fname" placeholder="First Name" /><br />
                <input type="text" name="lname" placeholder="Last Name" /><br />
                <input type="email" name="email" placeholder="Email" /><br />
                <input type="tel" name="phone" placeholder="Phone Number" /><br />
                Female
                <input type="radio" name="gender" value="Female"/>
                Male
                <input type="radio" name="gender" value="Male"/><br />
                Birth Date<br />
                <input type="date" name="birth"/><br />
                Nationality<br />
                <select name="nationality">
                    <option>Bulgarian</option>
                    <option>British</option>
                    <option>Romanian</option>
                    <option>Russian</option>
                    <option>German</option>
                    <option>French</option>
                    <option>Italian</option>
                    <option>Other</option>                
                </select>            
            </fieldset>
            <fieldset>
                <legend>Last Work Position</legend>
                Company Name
                <input type="text" name="compName" /><br />
                From
                <input type="date" name="workDateStart"/><br />
                To
                <input type="date" name="workDateEnd"/><br />          
            </fieldset>
            <fieldset>
                <legend>Computer Skills</legend>
                Programming Languages<br />
                <input type="text" name="progrLangs" />
                <select name="progrLevel">
                    <option>Beginner</option>
                    <option>Basic</option>
                    <option>Intermediate</option>
                    <option>Advanced</option>
                    <option>Expert</option>         
                </select><br />
                <input type="reset" name="removeLang" value="Remove Language"/>
                <input type="button" name="addLang" value="Add Language"/>         
            </fieldset>
            <fieldset>
                <legend>Other Skills</legend>
                Languages<br />
                <input type="text" name="languages" />
                <select name="comprehension">
                    <option>-Comprehension-</option>
                    <option>A1</option>
                    <option>A2</option>
                    <option>B1</option>
                    <option>B2</option>
                    <option>C1</option>
                    <option>C2</option>         
                </select>
                <select name="reading">
                    <option>-Reading-</option>
                    <option>A1</option>
                    <option>A2</option>
                    <option>B1</option>
                    <option>B2</option>
                    <option>C1</option>
                    <option>C2</option>         
                </select>
                <select name="writing">
                    <option>-Writing-</option>
                    <option>A1</option>
                    <option>A2</option>
                    <option>B1</option>
                    <option>B2</option>
                    <option>C1</option>
                    <option>C2</option>         
                </select><br />
                <input type="reset" name="removeLang" value="Remove Language"/>
                <input type="button" name="addLang" value="Add Language"/><br />
                Driver's Licenes<br />
                B
                <input type="checkbox" name="driversLic" value="B"/>
                A
                <input type="checkbox" name="driversLic" value="A"/>
                C
                <input type="checkbox" name="driversLic" value="C"/>
                         
            </fieldset>
            <input type="submit" value="Generate CV" />
                        
        
        <?php if (isset($_POST['fname'])): ?>
            <h1>CV</h1>
            <table class="main">
                <tr>
                    <th colspan="2">Personal Information</th>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td><?=$fname?></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><?=$lname?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?=$email?></td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td><?=$phone?></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><?=$gender?></td>
                </tr>
                <tr>
                    <td>Birth Date</td>
                    <td><?=$birth?></td>
                </tr>
                <tr>
                    <td>Nationality</td>
                    <td><?=$nationality?></td>
                </tr>
            </table>
            <table class="main">
                <tr>
                    <th colspan="2">Last Work Position</th>
                </tr>
                <tr>
                    <td>Company Name</td>
                    <td><?=$compName?></td>
                </tr>
                <tr>
                    <td>From</td>
                    <td><?=$workDateStart?></td>
                </tr>
                <tr>
                    <td>To</td>
                    <td><?=$workDateEnd?></td>
                </tr>
            </table>
            <table class="main">
                <tr>
                    <th colspan="3">Computer Skills</th>
                </tr>
                <tr>
                    <td>Programming Languages</td>
                    <td>
                        <table>
                            <tr>
                                <th>Language</th>
                            </tr>
                            <tr>
                                <td>
                                    C#
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Java
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    PHP
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table>
                            <tr>
                                <th>Skill Level</th>
                            </tr>
                            <tr>
                                <td>
                                    Beginner
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Programmer
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Ninja
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <th colspan="5">Other Skills</th>
                </tr>
                <tr>
                    <td>Languages</td>
                    <td>
                        <table>
                            <tr>
                                <th>Language</th>
                            </tr>
                            <tr>
                                <td>Bulgarian</td>
                            </tr>
                            <tr>
                                <td>english</td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table>
                            <tr>
                            <th>Comprehension</th>
                        </tr>
                        <tr>
                            <td>
                                intermediate
                            </td>
                        </tr>
                        <tr>
                            <td>
                                advanced
                            </td>
                        </tr>
                        </table>
                    </td>
                    <td>
                        <table>
                            <tr>
                            <th>Reading</th>
                        </tr>
                        <tr>
                            <td>beginner</td>
                        </tr>
                        <tr>
                            <td>beginner</td>
                        </tr>
                        </table>
                    </td>
                    <td>
                        <table>
                            <tr>
                            <th>Writing</th>
                        </tr>
                        <tr>
                            <td>advanced</td>
                        </tr>
                        <tr>
                            <td>intermediate</td>
                        </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>Driver's license</td>
                    <td colspan="4">B, A</td>
                </tr>
            </table>
        <?php endif; ?>
        </form>
    </body>
</html>