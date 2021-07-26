<?xml version = "1.0" encoding = "UTF-8"?>  
<xsl:stylesheet version = "1.0"   
xmlns:xsl = "http://www.w3.org/1999/XSL/Transform">     
   <xsl:template match = "/">   
      <html>
      <style>
        .table{
            margin-left: auto;
            margin-right: auto;
        }
        .heading{
            text-align: center;
        }
        .body{
            background: radial-gradient(#fff, #ff523b);
        }
      </style>   
         <body class="body">   
            <h2 class="heading">Products</h2>   
            <table class="table" border = "1">  
               <tr bgcolor = "pink">   
                  <th>ID</th>   
                  <th>Name</th>   
                  <th>Price</th>   
                  <th>Calories</th>   
               </tr>   
               <!-- for-each processing instruction   
               Looks for each element matching the XPath expression   
               -->   
               <xsl:for-each select="menu/food">   
                  <tr>   
                     <td>   
                        <!-- value-of processing instruction   
                        process the value of the element matching the XPath expression   
                        -->   
                        <xsl:value-of select = "@id"/>   
                     </td>   
                     <td><xsl:value-of select = "name"/></td>   
                     <td><xsl:value-of select = "price"/></td>   
                     <td><xsl:value-of select = "calories"/></td>     
                  </tr>   
               </xsl:for-each>   
            </table>   
         </body>   
      </html>  
   </xsl:template>   
</xsl:stylesheet>  