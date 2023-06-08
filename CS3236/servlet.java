import javax.servlet.*;
import javax.servlet.http.*;
import java.io.*;

public class ContactServlet extends HttpServlet {
  protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
    String name = request.getParameter("name");
    String email = request.getParameter("email");
    String message = request.getParameter("message");

    // Process the form data (e.g., send an email, store in database)

    // Set attributes for the confirmation message
    request.setAttribute("name", name);
    request.setAttribute("email", email);
    request.setAttribute("message", message);

    // Forward to a JSP page for displaying the confirmation message
    RequestDispatcher dispatcher = request.getRequestDispatcher("confirmation.jsp");
    dispatcher.forward(request, response);
  }
}
