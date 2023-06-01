<?php


class Page{
    public static function getPageHead(){
        $pageHead = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="./css/style.css">
            <title>Students Table</title>
        </head>
        <body>
            <main>
        ';
        return $pageHead;
    }

    public static function stuTable($studentList){
        $stuTable = '
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>UserName</th>
                    <th>Course</th>
                    <th>Email</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
            ';
            foreach($studentList as $student){
                $stuTable .= self::stuRow($student);
            }
            $stuTable .= '
            </tbody>
        </table>
        ';
        return $stuTable;
    }

    public static function stuRow($student){
        $stuRow = '
        <tr>
            <td>'.$student->getStudentId().'</td>
            <td>'.$student->getStudentName().'</td>
            <td>'.$student->getStudentAge().'</td>
            <td>'.$student->getStudentUserName().'</td>
            <td>'.$student->getStudentCourse().'</td>
            <td>'.$student->getStudentEmail().'</td>
            <td>'.$student->getStudentCountry().'</td>
        </tr>
        ';
        return $stuRow;
    }

    public static function newStudentForm(){
        $newStudentForm = '
        <form class="studentForm" method="POST" action="'.$_SERVER["PHP_SELF"].'">
            <section>
                <section class="inputs">
                    <article>
                        <label for="stuName">Name</label>
                        <input type="text" name="stuName" placeholder="Student Name">
                    </article>
                    <article>
                        <label for="stuAge">Age</label>
                        <input type="text" name="stuAge" placeholder="Student Age">
                    </article>
                    <article>
                        <label for="stuUserName">UserName</label>
                        <input type="text" name="stuUserName" placeholder="Student User Name">
                    </article>
                </section>
                <section class="inputs">
                    <article>
                        <label for="stuPassword">Password</label>
                        <input type="text" name="stuPassword" placeholder="Student Password">
                    </article>
                    <article>
                        <label for="stuCourse">Course</label>
                        <input type="text" name="stuCourse" placeholder="Student Course">
                    </article>
                    <article>
                        <label for="stuEmail">Email</label>
                        <input type="email" name="stuEmail" placeholder="Student Email">
                    </article>
                    <article>
                        <label for="stuCountry">Country</label>
                        <input type="text" name="stuCountry" placeholder="Student Country">
                    </article>
                </section>
            </section>
            <section>
                <input type="submit" value="Create a new Student" class="btnSubmit">
            </section>
        </form>
        ';
        return $newStudentForm;
    }

    public static function successMessage() {
        $message = '
        <section class="message" role="alert">
            New Student included successfully!
        </section>
        ';
        return $message;
    }

    public static function getPageFooter(){
        $pageFooter = '
        </main>
            </body>
        </html>
        ';
        return $pageFooter;
    }
}

?>