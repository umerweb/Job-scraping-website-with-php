<style>/* CSS for footer */
.footer {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    text-align: center;

}
.container{
    background-color: #fff;
    border-radius: 10px;
}

.footer p {
    margin: 0;
    color: black;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 0.9em;
   
}

/* Responsive styles */
@media only screen and (max-width: 768px) {
    .footer {
        padding: 15px 0;
    }
}
</style>

<div class="footer">
    <div class="container">
        <p>&copy; All rights reserved <?php echo date("Y"); ?> jobs.nordpak.org</p>
    </div>
</div>

