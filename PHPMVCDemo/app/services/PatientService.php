<?PHP

require_once APP_ROOT . '/app/models/Patient.php';
require_once APP_ROOT . '/app/libs/DbConnection.php';


class PatientService{
    public function getAllPatients(){
        $patients = [];
        $conn = null;
        $dbConnection = new DbConnection();

        if ($dbConnection != null){

            $conn = $dbConnection->getConnection();
            if ($conn != null){
                $sql = "SELECT * FROM patients";
                $stmt = $conn->query($sql);
                while ($row = $stmt->fetch()){

                    $patient = new Patient($row['id'], $row['name'], $row['gender']);
                    $patients[] = $patient;
                }
                return $patients;
            }
        }
        return $patients;
    }

    public function addPatient(Patient $patient){
        $dbConnection = new DbConnection();
        if ($dbConnection != null){
            $conn = $dbConnection->getConnection();

                if ($conn != null){
                    $name = $patient->getFullName();
                    $gender = $patient->getGender();
                    $sql = "INSERT INTO patients (name, gender) VALUES ('$name', $gender)";
                    $conn->exec($sql);
                }
            
        }               
    }

    public function getPatientById($id){

        $dbConnection = new DbConnection();

        if ($dbConnection != null){
            $conn = $dbConnection->getConnection();
            
            if ($conn != null){
                $sql = "SELECT * FROM patients WHERE id = '$id'";
                $stmt = $conn->query($sql);
                if ($stmt->rowCount() > 0){
                    $row = $stmt->fetch();
                    $patient = new Patient($row['id'], $row['name'], $row['gender']);
                    return $patient;
                }
            }
        }
}
    public function updatePatient(Patient $patient){
        $dbConnection = new DbConnection();

        if ($dbConnection != null){
            $conn = $dbConnection->getConnection();

            if ($conn != null){
                $id = $patient->getId();
                $name = $patient->getFullName();
                $gender = $patient->getGender();
                $sql = "UPDATE patients SET name = '$name', gender = '$gender' WHERE id = '$id'";
                $conn->exec($sql);

            }
        }
    }

    public function deletePatient($id){
        $dbConnection = new DbConnection();

        if ($dbConnection != null){
            $conn = $dbConnection->getConnection();

            if ($conn != null){
                $sql = "DELETE FROM patients WHERE id = '$id'";
                $conn->exec($sql);
            }
        }
    }


}
?>