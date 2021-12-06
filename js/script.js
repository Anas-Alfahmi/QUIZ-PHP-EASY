{/*  To make sure that the user wants to send the answer  */}
function clicked() {
    if (confirm(' Do You want Send the Exam ?')) {
        yourformelement.submit();
    } else {
        return false;
    }
 }
