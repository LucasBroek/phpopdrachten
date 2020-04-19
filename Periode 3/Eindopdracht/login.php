<?php
/**
 * Created by PhpStorm.
 * User: LuBro
 * Date: 19/04/2020
 * Time: 16:48
 */
include "../../Includes/header.php";
include "../../Includes/nav.php";
include "script.php";
?>
<form action="login.php" method="post">
    <table>
        <tr>
            <?php
            echo $message;
            ?>
        </tr>
        <?php
        if(!isset($_POST["submit"]) || $password != $pWordKnown || $username != $uNameKnown) {
            ?>
            <tr>
                <td>
                    <label for="username">Username: </label>
                </td>
                <td>
                    <input type="text" name="username">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Password: </label>
                </td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit">
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</form>


<?php
include "../../Includes/footer.php";