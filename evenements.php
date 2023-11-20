<?php 

class evenements
{
    public int $id_event;
    public string $nom_event;
    public string $lieu;
    public string $date;
    public int $nb_places;
    public string $description;

    public function show() {
        echo '<table border=1 width="100%">
            <tr align="center">
                <td>id_event</td>
                <td>nom_event</td>
                <td>lieu</td>
                <td>date</td>
                <td>nb_places</td>
                <td>description</td>
            </tr>
            <tr>
                <td>'. $this->id_event .'</td>
                <td>'. $this->nom_event .'</td>
                <td>'. $this->lieu .'</td>
                <td>'. $this->date .'</td>
                <td>'. $this->nb_places .'</td>
                <td>'. $this->description .'</td>
            </tr>
        </table>';
    }
}
