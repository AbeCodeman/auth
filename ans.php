<?php
if (!isset($_POST['send'])) {
    header("Location: index.php");
}
    require_once "parts/header.php";
?>
    <div class="container my-5">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        1
                    </td>
                    <td>
                        Имя:
                    </td>
                    <td>
                        <?php
                        echo filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        2
                    </td>
                    <td>
                        Фамилия: 
                    </td>
                    <td>
                    <?php
                        echo filter_input(INPUT_POST, "surname", FILTER_SANITIZE_STRING);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        3
                    </td>
                    <td>
                        email:
                    </td>
                    <td>
                    <?php
                        echo filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        4
                    </td>
                    <td>
                        город
                    </td>
                    <td>
                    <?php
                        echo filter_input(INPUT_POST, "city", FILTER_SANITIZE_STRING);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        5
                    </td>
                    <td>
                        номер телефона:
                    </td>
                    <td>
                    <?php
                    $reg_exp = '/\+7\s\(\d{3}\)\s\d{3}\-\d{2}-\d{2}\b/';
                        $result = filter_var($_POST['number'], FILTER_VALIDATE_REGEXP, array(
                            'options' => array(
                                'regexp' => $reg_exp,
                            ),
                        ));
                        echo $result;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        6
                    </td>
                    <td>
                        ваше образование:
                    </td>
                    <td>
                    <?php
                        echo $_POST['edu'];
                    ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        7
                    </td>
                    <td>
                        ваш рост:
                    </td>
                    <td>
                    <?php
                    echo $_POST['tall'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        8
                    </td>
                    <td>
                        ваш вес:
                    </td>
                    <td>
                    <?php
                        echo $_POST['weight'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        9
                    </td>
                    <td>
                        ваш пол:
                    </td>
                    <td>
                    <?php
                        echo $_POST['sex'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        10
                    </td>
                    <td>
                        ваш пол:
                    </td>
                    <td>
                    <?php
                        echo $_POST["job"];
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php
    require_once "parts/footer.php";
?>