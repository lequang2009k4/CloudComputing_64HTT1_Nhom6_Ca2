<?php
require_once APP_ROOT . '/app/services/PatientService.php';
require_once APP_ROOT . '/app/models/Patient.php';

class PatientController
{

    public function add()
    {
        require_once APP_ROOT . '/app/views/patient/add.php';
    }

    public function edit($id)
    {
        if (isset($id)) {
            
        $patientService = new PatientService();
        $patient = $patientService->getPatientById($id);
        include APP_ROOT . '/app/views/patient/edit.php';
        } else {
            echo "Id is null";
             }
    }
   
    public function show_delete($id)
    {
        $patientService = new PatientService();
        $patient = $patientService->getPatientById($id);
        include APP_ROOT . '/app/views/patient/delete.php';
    }
    public function update($id)
    {
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $patient_new = new Patient($id, $name, $gender);
        $patientService = new PatientService();
        $patientService->updatePatient($patient_new);
        header('Location: ?controller=home');
    }

    public function delete($id)
    {
        $patientService = new PatientService();
        $patientService->deletePatient($id);
        header('Location: ?controller=home');
    }
    public function create()
    {

    }

    public function store()
    {
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $patient = new Patient(null,$name,$gender);
        $patientService = new PatientService();
        $patientService->addPatient($patient);
        header('Location: ?controller=home');
    }
}

?>