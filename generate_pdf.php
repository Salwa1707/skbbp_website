<?php
require_once('tcpdf/tcpdf.php');
include "connection.php";

if (isset($_REQUEST['id_no'])) {
    $id_no = $_REQUEST['id_no'];

    // Fetch the data from the database
    $stmt = $conn->prepare("SELECT * FROM feedback WHERE id_no = ?");
    $stmt->bind_param("i", $id_no);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    // Create new PDF document
    $pdf = new TCPDF();
    $pdf->AddPage();

    // Set title and other meta information
    $pdf->SetTitle('Maklum Balas');
    $pdf->SetAuthor('Your Name');

    // Add content to the PDF
    $html = '
    <h1>Maklum Balas</h1>
    <table border="1" cellpadding="5">
        <tr>
            <th>No.</th>
            <th>Tarikh</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Telefon</th>
            <th>Jantina</th> 
            <th>Mesej</th>
        </tr>
        <tr>
            <td>' . htmlspecialchars($row['id_no']) . '</td>
            <td>' . htmlspecialchars($row['tarikh']) . '</td>
            <td>' . htmlspecialchars($row['name']) . '</td>
            <td>' . htmlspecialchars($row['email']) . '</td>
            <td>' . htmlspecialchars($row['phone']) . '</td>
            <td>' . htmlspecialchars($row['gender']) . '</td>
            <td>' . htmlspecialchars($row['message']) . '</td>
        </tr>
    </table>';

    $pdf->writeHTML($html, true, false, true, false, '');

    // Close and output PDF document
    $pdf->Output('maklum_balas.pdf', 'I');
}
?>
