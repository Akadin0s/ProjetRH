  // Form validation script
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();



const Situation = document.getElementById('marie_selected');
  const Situation1 = document.getElementById('divorce_selected');
  Situation.style.display = 'none';
  Situation1.style.display = 'none';
  function handleRadioClick() {
    if (document.getElementById('marie').checked) {
      Situation.style.display = 'block';
      Situation1.style.display = 'none';
      clearDivorceInputs();
    } 
    else if (document.getElementById('divorce').checked) {
      Situation1.style.display = 'block';
      Situation.style.display = 'none';
      clearMarieInputs();
    } 
    else {
      Situation.style.display = 'none';
      Situation1.style.display = 'none';
      clearMarieInputs();
      clearDivorceInputs();
    }
  }
  
  function clearMarieInputs() {
    document.getElementById('marie_prenom_fr').value = '';
    document.getElementById('marie_prenom_ar').value = '';
    document.getElementById('marie_nom_fr').value = '';
    document.getElementById('marie_nom_ar').value = '';
    document.getElementById('marie_cnie').value = '';
    document.getElementById('marie_nbrenf').value = '';
    document.getElementById('cloneit').innerHTML = '';
  }
  
  function clearDivorceInputs() {
    document.getElementById('divorce_nbrenf1').value = '';
    document.getElementById('cloneit1').innerHTML = '';
  }


  const radioButtons = document.querySelectorAll(
    'input[name="situation_familiale"]',
  );
  radioButtons.forEach(radio => {
    radio.addEventListener('click', handleRadioClick);
  });

  function showDetails() {
    var count = parseInt(document.getElementById("marie_nbrenf").value);
    var container = document.getElementById("cloneit");    
    var count1 = parseInt(document.getElementById("divorce_nbrenf1").value);
    var container1 = document.getElementById("cloneit1");
    
    // Clear previous content
    container.innerHTML = ""; 
    container1.innerHTML = ""; 
    
    for (var i = 0; i < count; i++) {
        var div = document.getElementById("enf_info").cloneNode(true);
        div.style.display = 'block';
        
        // Create an h3 element
        var heading = document.createElement("h3");
        // Set the text content of the h3 element to the value of i
        heading.textContent ="Information de l'enfant "+ (i+1);
        heading.style.textAlign = 'center';
        
        // Append the h3 element to the container before the div
        container.appendChild(heading);
        container.appendChild(div);
    }
    
    for (var i = 0; i < count1; i++) {
        var div = document.getElementById("enf_info1").cloneNode(true);
        div.style.display = 'block';
        
        // Create an h3 element
        var heading = document.createElement("h3");
        // Set the text content of the h3 element to the value of i
        heading.textContent ="Information de l'enfant "+ (i+1);
        heading.style.textAlign = 'center';
        
        // Append the h3 element to the container before the div
        container1.appendChild(heading);
        container1.appendChild(div);
    }    
    
}

function extractYear(noteId) {
  var notesField = document.getElementById(noteId).value;
  var annFieldId = noteId + "_ann";
  var annField = document.getElementById(annFieldId);
  var currentYear = new Date().getFullYear();
  var extractedYear = '';

  // Attempt to find a 4-digit year in the notes field
  var yearRegex = /\b\d{4}\b/;
  var match = notesField.match(yearRegex);
  
  if (notesField.trim() === '') {
    // If notes field is empty, clear the corresponding "Ann" field
    annField.value = '';
    return;
  }

  if (match) {
    extractedYear = match[0];
  } else {
    // Extract year based on noteId
    switch (noteId) {
      case 'note1':
        extractedYear = currentYear;
        break;
      case 'note2':
        extractedYear = currentYear - 1;
        break;
      case 'note3':
        extractedYear = currentYear - 2;
        break;
      case 'note4':
        extractedYear = currentYear - 3;
        break;
      default:
        extractedYear = currentYear;
    }
  }
  
  annField.value = extractedYear;
}

function checkNumberValidity(input) {
  var value = parseFloat(input.value);

  if (isNaN(value)) {
      input.setCustomValidity("Please enter a valid number.");
  } else if (value < 0 || value > 20) {
      input.setCustomValidity("Number must be between 0 and 20.");
  } else {
      input.setCustomValidity("");
  }
}
//Indice /Echelle
 // Define a function to generate HTML content based on input values
    function indicegen() {
        // Get input values
        var grade = document.getElementById('grade_fr').value;
    var echelon = document.getElementById('echelon').value;
    var echelleSelect = document.getElementById('echelle');
    var indiceInput = document.getElementById('indice');
        
        // Process inputs and generate HTML content based on conditions
        var rsindice;
        var rsechelle;
        if (grade === "administrateur 1er grade") {
          rsechelle = "hors echelle";
          
          if (echelon === "1") {
              rsindice = "704";
          } else if (echelon === "2") {
              rsindice = "746";
          } else if (echelon === "3") {
              rsindice = "779";
          } else if (echelon === "4") {
              rsindice = "812";
          } else if (echelon === "5") {
              rsindice = "840";
          } else if (echelon === "6") {
              rsindice = "870";
          }
          document.getElementById('echelle').value = rsechelle;
      } else if (grade === "administrateur 2eme grade") {
          rsechelle = "11";
          if (echelon === "1") {
              rsindice = "336";
          } else if (echelon === "2") {
              rsindice = "369";
          } else if (echelon === "3") {
              rsindice = "403";
          } else if (echelon === "4") {
              rsindice = "436";
          } else if (echelon === "5") {
              rsindice = "472";
          } else if (echelon === "6") {
              rsindice = "509";
          } else if (echelon === "7") {
              rsindice = "542";
          } else if (echelon === "8") {
              rsindice = "574";
          } else if (echelon === "9") {
              rsindice = "606";
          } else if (echelon === "10") {
              rsindice = "639";
          } else if (echelon === "exceptionnel") {
              rsindice = "704";
          }
          document.getElementById('echelle').value = rsechelle;
      } else if (grade === "administrateur 3eme grade") {
          rsechelle = "10";
          if (echelon === "1") {
              rsindice = "275";
          } else if (echelon === "2") {
              rsindice = "300";
          } else if (echelon === "3") {
              rsindice = "326";
          } else if (echelon === "4") {
              rsindice = "351";
          } else if (echelon === "5") {
              rsindice = "377";
          } else if (echelon === "6") {
              rsindice = "402";
          } else if (echelon === "7") {
              rsindice = "428";
          } else if (echelon === "8") {
              rsindice = "456";
          } else if (echelon === "9") {
              rsindice = "484";
          } else if (echelon === "10") {
              rsindice = "512";
          } else if (echelon === "exceptionnel") {
              rsindice = "564";
          }
          document.getElementById('echelle').value = rsechelle;
      } else if (grade === "administrateur mi") {
          rsechelle = "11";
          if (echelon === "1") {
              rsindice = "336";
          } else if (echelon === "2") {
              rsindice = "369";
          } else if (echelon === "3") {
              rsindice = "406";
          } else if (echelon === "4") {
              rsindice = "436";
          } else if (echelon === "5") {
              rsindice = "476";
          } else if (echelon === "6") {
              rsindice = "509";
          } else if (echelon === "7") {
              rsindice = "542";
          } else if (echelon === "8") {
              rsindice = "578";
          } else if (echelon === "9") {
              rsindice = "610";
          } else if (echelon === "10") {
              rsindice = "639";
          } else if (echelon === "exceptionnel") {
              rsindice = "704";
          }
          document.getElementById('echelle').value = rsechelle;
      } else if (grade === "administrateur principal mi" || grade === "infirmier grade exceptionnel") {
          rsechelle = "hors echelle";
          if (echelon === "1") {
              rsindice = "704";
          } else if (echelon === "2") {
              rsindice = "746";
          } else if (echelon === "3") {
              rsindice = "779";
          } else if (echelon === "4") {
              rsindice = "812";
          } else if (echelon === "5") {
              rsindice = "840";
          } else if (echelon === "6") {
              rsindice = "870";
          }
          document.getElementById('echelle').value = rsechelle;
      } else if (grade === "administrateur adjoint mi") {
          rsechelle = "10";
          if (echelon === "1") {
              rsindice = "275";
          } else if (echelon === "2") {
              rsindice = "300";
          } else if (echelon === "3") {
              rsindice = "329";
          } else if (echelon === "4") {
              rsindice = "355";
          } else if (echelon === "5") {
              rsindice = "380";
          } else if (echelon === "6") {
              rsindice = "402";
          } else if (echelon === "7") {
              rsindice = "428";
          } else if (echelon === "8") {
              rsindice = "460";
          } else if (echelon === "9") {
              rsindice = "484";
          } else if (echelon === "10") {
              rsindice = "512";
          } else if (echelon === "exceptionnel") {
              rsindice = "564";
          }
          document.getElementById('echelle').value = rsechelle;
      } else if (grade === "architecte" || grade === "ingenieur etat") {
      
          if (echelleSelect.value === "1er grade") {
              if (echelon === "1") {
                  rsindice = "336";
              } else if (echelon === "2") {
                  rsindice = "369";
              } else if (echelon === "3") {
                  rsindice = "403";
              } else if (echelon === "4") {
                  rsindice = "436";
              } else if (echelon === "5") {
                  rsindice = "472";
              }
          } else if (echelleSelect.value === "grade principal") {
              if (echelon === "1") {
                  rsindice = "509";
              } else if (echelon === "2") {
                  rsindice = "542";
              } else if (echelon === "3") {
                  rsindice = "574";
              }
              else if (echelon === "4") {
                rsindice = "606";
            } else if (echelon === "5") {
                rsindice = "639";
            } else if (echelon === "6") {
                rsindice = "704";
            }
        } 
        
      }else if (grade === "ingenieur en chef" || grade === "architecte chef") {
        console.log(grade);
            if (echelleSelect.value === "1er grade") {
                if (echelon === "1") {
                    rsindice = "704";
                } else if (echelon === "2") {
                    rsindice = "746";
                } else if (echelon === "3") {
                    rsindice = "779";
                } else if (echelon === "4") {
                    rsindice = "812";
                } else if (echelon === "5") {
                    rsindice = "840";
                } else if (echelon === "6") {
                    rsindice = "870";
                }
            } else if (echelleSelect.value === "grade principal") {
                if (echelon === "1") {
                    rsindice = "870";
                } else if (echelon === "2") {
                    rsindice = "900";
                } else if (echelon === "3") {
                    rsindice = "930";
                } else if (echelon === "4") {
                    rsindice = "960";
                } else if (echelon === "5") {
                    rsindice = "990";
                }
            }
            
      } else if (grade === "adjoint technique 1er grade" || grade === "adjoint administratif 1er grade") {
            rsechelle = "8";
            if (echelon === "1") {
                rsindice = "207";
            } else if (echelon === "2") {
                rsindice = "224";
            } else if (echelon === "3") {
                rsindice = "241";
            } else if (echelon === "4") {
                rsindice = "259";
            } else if (echelon === "5") {
                rsindice = "276";
            } else if (echelon === "6") {
                rsindice = "293";
            } else if (echelon === "7") {
                rsindice = "311";
            } else if (echelon === "8") {
                rsindice = "332";
            } else if (echelon === "9") {
                rsindice = "353";
            } else if (echelon === "10") {
                rsindice = "373";
            }
            document.getElementById('echelle').value = rsechelle;
      } else if (grade === "adjoint technique 2eme grade" || grade === "adjoint administratif 2eme grade") {
            rsechelle = "6";
            if (echelon === "1") {
                rsindice = "151";
            } else if (echelon === "2") {
                rsindice = "161";
            } else if (echelon === "3") {
                rsindice = "173";
            } else if (echelon === "4") {
                rsindice = "185";
            } else if (echelon === "5") {
                rsindice = "197";
            } else if (echelon === "6") {
                rsindice = "209";
            } else if (echelon === "7") {
                rsindice = "222";
            } else if (echelon === "8") {
                rsindice = "236";
            } else if (echelon === "9") {
                rsindice = "249";
            } else if (echelon === "10") {
                rsindice = "262";
            }
            document.getElementById('echelle').value = rsechelle;
      } else if (grade === "adjoint technique grade principal" || grade === "adjoint administratif grade principal") {
            rsechelle = "9";
            if (echelon === "1") {
                rsindice = "235";
            } else if (echelon === "2") {
                rsindice = "253";
            } else if (echelon === "3") {
                rsindice = "274";
            } else if (echelon === "4") {
                rsindice = "296";
            } else if (echelon === "5") {
                rsindice = "317";
            } else if (echelon === "6") {
                rsindice = "339";
            } else if (echelon === "7") {
                rsindice = "361";
            } else if (echelon === "8") {
                rsindice = "382";
            } else if (echelon === "9") {
                rsindice = "404";
            } else if (echelon === "10") {
                rsindice = "438";
            }
            document.getElementById('echelle').value = rsechelle;
        } else if (grade === "redacteur 4eme grade" || grade === "technicien 4eme grade") {
            rsechelle = "8";
            if (echelon === "1") {
                rsindice = "207";
            } else if (echelon === "2") {
                rsindice = "224";
            } else if (echelon === "3") {
                rsindice = "241";
            } else if (echelon === "4") {
                rsindice = "259";
            } else if (echelon === "5") {
                rsindice = "276";
            } else if (echelon === "6") {
                rsindice = "293";
            } else if (echelon === "7") {
                rsindice = "311";
            } else if (echelon === "8") {
                rsindice = "332";
            } else if (echelon === "9") {
                rsindice = "353";
            } else if (echelon === "10") {
                rsindice = "373";
            }
            document.getElementById('echelle').value = rsechelle;
        } else if (grade === "redacteur 3eme grade" || grade === "technicien 3eme grade") {
            rsechelle = "9";
            if (echelon === "1") {
                rsindice = "235";
            } else if (echelon === "2") {
                rsindice = "253";
            } else if (echelon === "3") {
                rsindice = "274";
            } else if (echelon === "4") {
                rsindice = "296";
            } else if (echelon === "5") {
                rsindice = "317";
            } else if (echelon === "6") {
                rsindice = "339";
            } else if (echelon === "7") {
                rsindice = "361";
            } else if (echelon === "8") {
                rsindice = "382";
            } else if (echelon === "9") {
                rsindice = "404";
            } else if (echelon === "10") {
                rsindice = "438";
            }
            document.getElementById('echelle').value = rsechelle;
        } else if (grade === "redacteur 2eme grade" || grade === "technicien 2eme grade" || grade === "infirmier 1er grade") {
          rsechelle = "10";
          if (echelon === "1") {
              rsindice = "275";
          } else if (echelon === "2") {
              rsindice = "300";
          } else if (echelon === "3") {
              rsindice = "326";
          } else if (echelon === "4") {
              rsindice = "351";
          } else if (echelon === "5") {
              rsindice = "377";
          } else if (echelon === "6") {
              rsindice = "402";
          } else if (echelon === "7") {
              rsindice = "428";
          } else if (echelon === "8") {
              rsindice = "456";
          } else if (echelon === "9") {
              rsindice = "484";
          } else if (echelon === "10") {
              rsindice = "512";
          } else if (echelon === "exceptionnel") {
              rsindice = "564";
          }
          document.getElementById('echelle').value = rsechelle;
      } else if (grade === "redacteur 1er grade" || grade === "technicien 1er grade" || grade === "infirmier grade principal") {
          rsechelle = "11";
          if (echelon === "1") {
              rsindice = "336";
          } else if (echelon === "2") {
              rsindice = "369";
          } else if (echelon === "3") {
              rsindice = "403";
          } else if (echelon === "4") {
              rsindice = "436";
          } else if (echelon === "5") {
              rsindice = "472";
          } else if (echelon === "6") {
              rsindice = "509";
          } else if (echelon === "7") {
              rsindice = "542";
          } else if (echelon === "8") {
              rsindice = "574";
          } else if (echelon === "9") {
              rsindice = "606";
          } else if (echelon === "10") {
              rsindice = "639";
          } else if (echelon === "11") {
              rsindice = "675";
          } else if (echelon === "12") {
              rsindice = "690";
          } else if (echelon === "13") {
              rsindice = "704";
          }
          document.getElementById('echelle').value = rsechelle;
      } else if (grade === "veterinaire" || grade === "medecin") {
      
          if (echelleSelect.value === "1er grade") {
            
              if (echelon === "1") {
                  rsindice = "509";
              } else if (echelon === "2") {
                  rsindice = "542";
              } else if (echelon === "3") {
                  rsindice = "575";
              } else if (echelon === "4") {
                  rsindice = "608";
              } else if (echelon === "5") {
                  rsindice = "641";
              }
          } else if (echelleSelect.value === "grade principal") {
              if (echelon === "1") {
                  rsindice = "674";
              } else if (echelon === "2") {
                  rsindice = "707";
              } else if (echelon === "3") {
                  rsindice = "740";
              } else if (echelon === "4") {
                  rsindice = "773";
              } else if (echelon === "5") {
                  rsindice = "806";
              }
          } else if (echelleSelect.value === "grade exceptionnel") {
              if (echelon === "1") {
                  rsindice = "770";
              } else if (echelon === "2") {
                  rsindice = "799";
              } else if (echelon === "3") {
                  rsindice = "839";
              } else if (echelon === "4") {
                  rsindice = "872";
              } else if (echelon === "5") {
                  rsindice = "905";
              }
          } else if (echelleSelect.value === "hors echelle") {
              if (echelon === "1") {
                  rsindice = "869";
              } else if (echelon === "2") {
                  rsindice = "899";
              } else if (echelon === "3") {
                  rsindice = "938";
              } else if (echelon === "4") {
                  rsindice = "971";
              } else if (echelon === "5") {
                  rsindice = "1004";
              }
          }
      }
    
                    
  
          // Disable the Echelle select and Indice input if Grade is not empty
           if (grade.trim() !== "") {               
               indiceInput.readOnly = true;
               
           } else {
            // Enable the Echelle select and Indice input if Grade is empty
            indiceInput.readOnly = false;   
            echelleSelect.readOnly = false;     
        }

        if (grade === "adjoint technique 2eme grade" || grade === "technicien 4eme grade"|| grade === "technicien 3eme grade"|| grade === "technicien 2eme grade"|| grade === "technicien 1er grade"|| grade === "infirmier 1er grade"|| grade === "infirmier grade exceptionnel"|| grade === "infirmier grade principal"|| grade === "adjoint administratif 2eme grade"|| grade === "adjoint administratif 1er grade"||grade === "adjoint administratif grade principal"||grade === "adjoint technique 1er grade" ||grade === "adjoint technique grade principal" ||grade === "redacteur 4eme grade" ||grade === "redacteur 3eme grade" ||grade === "redacteur 2eme grade" ||grade === "redacteur 1er grade" ||grade === "administrateur adjoint mi" || grade === "administrateur principal mi" ||grade === "administrateur mi" || grade === "administrateur 1er grade" || grade === "administrateur 2eme grade" || grade === "administrateur 3eme grade") {
            echelleSelect.classList.add("disabled-select"); 
        }
        else{
            echelleSelect.classList.remove("disabled-select");
        }
        // Update the result element with the generated HTML
        document.getElementById('indice').value = rsindice;
        
    }

      // Add event listeners to input fields to call indicegen function when input changes
  document.getElementById('grade_fr').addEventListener('change', indicegen);
  document.getElementById('echelon').addEventListener('change', indicegen);

  function resetEchelonAndEchelle() {
    // Reset echelon select to the default value
    document.getElementById('echelon').selectedIndex = 0;
    
    // Reset echelle select to the default value
    document.getElementById('echelle').selectedIndex = 0;
  
    // Reset indice input to empty
    document.getElementById('indice').value = '';
  }
  
function updateEchelleOptions() {
    var grade = document.getElementById('grade_fr').value;
    var echelle = document.getElementById('echelle').value;
    var echelleSelect = document.getElementById('echelle');
    var echelonSelect = document.getElementById('echelon');
    var allOptionsechelle = echelleSelect.options;
    var allOptionsechelon = echelonSelect.options;

    if (grade === "ingenieur etat" || grade === "architecte") {
      echelleSelect.readOnly = false;
      for (var i = 0; i < allOptionsechelle.length; i++) {
          var optionechelle = allOptionsechelle[i];
          if (optionechelle.value === "1er grade" || optionechelle.value === "grade principal") {
              optionechelle.hidden = false;
          } else {
              optionechelle.hidden = true;
          }
      }
      if (echelle === "1er grade") {
          for (var j = 0; j < allOptionsechelon.length; j++) {
              var optionechelon = allOptionsechelon[j];
              if (optionechelon.value === "1" || optionechelon.value === "2"|| optionechelon.value === "3"|| optionechelon.value === "4"|| optionechelon.value === "5") {
                  optionechelon.hidden = false;
              } else {
                  optionechelon.hidden = true;
              }
          }
      } else if (echelle === "grade principal") {
          for (var j = 0; j < allOptionsechelon.length; j++) {
              var optionechelon = allOptionsechelon[j];
              if (optionechelon.value === "1" || optionechelon.value === "2"|| optionechelon.value === "3"|| optionechelon.value === "4"|| optionechelon.value === "5"|| optionechelon.value === "6") {
                  optionechelon.hidden = false;
              } else {
                  optionechelon.hidden = true;
              }
          }
      }
  } else if (grade === "administrateur 1er grade"||grade === "administrateur principal mi"||grade === "infirmier grade exceptionnel" ) {
      echelleSelect.readOnly = true;
      for (var j = 0; j < allOptionsechelon.length; j++) {
          var optionechelon = allOptionsechelon[j];
          if (optionechelon.value === "1" || optionechelon.value === "2"|| optionechelon.value === "3"|| optionechelon.value === "4"|| optionechelon.value === "5"|| optionechelon.value === "6") {
              optionechelon.hidden = false;
          } else {
              optionechelon.hidden = true;
          }
      }
  } else if (grade === "ingenieur en chef" || grade === "architecte chef") {
      echelleSelect.readOnly = false;
      for (var i = 0; i < allOptionsechelle.length; i++) {
          var optionechelle = allOptionsechelle[i];
          if (optionechelle.value === "1er grade" || optionechelle.value === "grade principal") {
              optionechelle.hidden = false;
          } else {
              optionechelle.hidden = true;
          }
      }
      if (echelle === "1er grade") {
          for (var j = 0; j < allOptionsechelon.length; j++) {
              var optionechelon = allOptionsechelon[j];
              if (optionechelon.value === "1" || optionechelon.value === "2"|| optionechelon.value === "3"|| optionechelon.value === "4"|| optionechelon.value === "5") {
                  optionechelon.hidden = false;
              } else {
                  optionechelon.hidden = true;
              }
          }
      } else if (echelle === "grade principal") {
          for (var j = 0; j < allOptionsechelon.length; j++) {
              var optionechelon = allOptionsechelon[j];
              if (optionechelon.value === "1" || optionechelon.value === "2"|| optionechelon.value === "3"|| optionechelon.value === "4"|| optionechelon.value === "5") {
                  optionechelon.hidden = false;
              } else {
                  optionechelon.hidden = true;
              }
          }
      }
  } else if (grade === "adjoint technique 1er grade" || grade === "adjoint technique 2eme grade"|| grade === "adjoint technique grade principal" || grade === "adjoint administratif grade principal" || grade === "adjoint administratif 1er grade" || grade === "adjoint administratif 2eme grade"|| grade === "redacteur 4eme grade"|| grade === "redacteur 3eme grade"|| grade === "technicien 4eme grade"|| grade === "technicien 3eme grade") {
      echelleSelect.readOnly = true;
      for (var j = 0; j < allOptionsechelon.length; j++) {
          var optionechelon = allOptionsechelon[j];
          if (optionechelon.value === "1" || optionechelon.value === "2"|| optionechelon.value === "3"|| optionechelon.value === "4"|| optionechelon.value === "5"|| optionechelon.value === "6"|| optionechelon.value === "7"|| optionechelon.value === "8"|| optionechelon.value === "9"|| optionechelon.value === "10") {
              optionechelon.hidden = false;
          } else {
              optionechelon.hidden = true;
          }
      }
  
  } 
  else if (grade === "administrateur 2eme grade"||grade === "administrateur 3eme grade"||grade === "redacteur 2eme grade"||grade === "technicien 2eme grade"||grade ==="administrateur mi"||grade ==="administrateur adjoint mi" || grade === "infirmier 1er grade" ) {
      echelleSelect.readOnly = true;
      for (var j = 0; j < allOptionsechelon.length; j++) {
          var optionechelon = allOptionsechelon[j];
          if (optionechelon.value === "1" || optionechelon.value === "2"|| optionechelon.value === "3"|| optionechelon.value === "4"|| optionechelon.value === "5"|| optionechelon.value === "6"|| optionechelon.value === "7"|| optionechelon.value === "8"|| optionechelon.value === "9"|| optionechelon.value === "10"|| optionechelon.value === "exceptionnel") {
              optionechelon.hidden = false;
          } else {
              optionechelon.hidden = true;
  
      }
      
  }
}
else if (grade === "redacteur 1er grade_fr"||grade === "technicien 1er grade"|| grade === "infirmier grade principal") {
  echelleSelect.readOnly = true;
    for (var j = 0; j < allOptionsechelon.length; j++) {
      var optionechelon = allOptionsechelon[j];
      if (optionechelon.value === "exceptionnel") {
          optionechelon.hidden = true;
          
      } else {
          optionechelon.hidden = false;
      }
      
  }
}
else if (grade === "veterinaire"|| grade === "medecin" ) {
  echelleSelect.readOnly = false;
  for (var i = 0; i < allOptionsechelle.length; i++) {
      var optionechelle = allOptionsechelle[i];
      if (optionechelle.value === "1er grade" || optionechelle.value === "grade principal"|| optionechelle.value === "grade exceptionnel"|| optionechelle.value === "hors echelle") {
          optionechelle.hidden = false;
      } else {
          optionechelle.hidden = true;
      }
      
  }
    
    for (var j = 0; j < allOptionsechelon.length; j++) {
      var optionechelon = allOptionsechelon[j];
      if (optionechelon.value === "1" || optionechelon.value === "2"|| optionechelon.value === "3"|| optionechelon.value === "4"|| optionechelon.value === "5") {
          optionechelon.hidden = false;
          
      } else {
          optionechelon.hidden = true;
      }
      
  }
  
}
   else {
        echelleSelect.readOnly = true;
        indicegen();
         document.getElementById('echelon').selectedIndex = 0;
         document.getElementById('indice').value = '';
    }

   
}


  // Add event listeners to input fields to call indicegen function when input changes
document.getElementById('grade_fr').addEventListener('change', function() {
    resetEchelonAndEchelle();
    updateEchelleOptions();
    indicegen();
});
// Add event listener for the 'echelle' select element
document.getElementById('echelle').addEventListener('change', function() {
  updateEchelleOptions();
  indicegen();
});
function updateservice(){
  var division = document.getElementById('division_fr').value;
  var service = document.getElementById('service_fr').value;
  var serviceselect = document.getElementById('service_fr');
  var serviceselectar = document.getElementById('service_ar');
  var bureauselect = document.getElementById('bureau_fr');
  var bureauselectar = document.getElementById('bureau_ar');
  var alloptionsservice = serviceselect;
  var alloptionsbureau = bureauselect;
  serviceselect.readOnly = false;
  bureauselect.readOnly = false;
  if(division === "Division des affaires techniques et d`urbanisme"){
    for (var i = 0; i < alloptionsservice.length; i++) {
      var optionservice = alloptionsservice[i];
      if (optionservice.value === "Service des travaux et de la protection de l`environement" || optionservice.value === "Service d`urbanisme et du patrimoine"|| optionservice.value === "Service de la gestion déléguée des engins du materiel") {
        optionservice.hidden = false;
        if(service === "Service des travaux et de la protection de l`environement"){
            
            for (var i = 0; i < alloptionsbureau.length; i++) {
              var optionbureau = alloptionsbureau[i];
              if (optionbureau.value === "Bureau des traveaux" || optionbureau.value === "Bureau de l`éclarage public"|| optionbureau.value === "Bureau des éspace verts et de la protection de l`environement") {
                optionbureau.hidden = false;
              } else {
                optionbureau.hidden = true;
              }
          }
          }else if(service === "Service d`urbanisme et du patrimoine"){
            for (var i = 0; i < alloptionsbureau.length; i++) {
              var optionbureau = alloptionsbureau[i];
              if (optionbureau.value === "Bureau du gichet unique des autorisations et du control du batiment"|| optionbureau.value === "Bureau du patrimoine") {
                optionbureau.hidden = false;
              } else {
                optionbureau.hidden = true;
              }
          }
          }  else if(service === "Service de la gestion déléguée des engins du materiel"){
            for (var i = 0; i < alloptionsbureau.length; i++) {
              var optionbureau = alloptionsbureau[i];
                optionbureau.hidden = true;          
          }
          bureauselect.readOnly = true;
                document.getElementById('bureau_ar').value = ' ';
                bureauselectar.readOnly = true;
                document.getElementById('bureau_fr').value = ' ';  
          }
      } else {
        optionservice.hidden = true;
      }
  }
  }else  if(division === "Division des affaires administratives"){
    for (var i = 0; i < alloptionsservice.length; i++) {
      var optionservice = alloptionsservice[i];
      if (optionservice.value === "Service des ressources humaines et de le formation" || optionservice.value === "Service des affaires juridiques de l`informatique et des affaires du conseil"|| optionservice.value === "Service des affaires sociales culturelles et sportives") {
        optionservice.hidden = false;
        if(service === "Service des affaires juridiques de l`informatique et des affaires du conseil"){
            for (var i = 0; i < alloptionsbureau.length; i++) {
              var optionbureau = alloptionsbureau[i];
              if (optionbureau.value === "Bureau des affaires juridiques"|| optionbureau.value === "Bureau de l`informatique"|| optionbureau.value === "Bureau des affaires du conseil"|| optionbureau.value === "Bureau d`état civil de la legalisation de signature et ses annexes") {
                optionbureau.hidden = false;
              } else {
                optionbureau.hidden = true;
              }
          }
          }  else if(service === "Service des ressources humaines et de le formation"||service === "Service des affaires sociales culturelles et sportives"){
            for (var i = 0; i < alloptionsbureau.length; i++) {
              var optionbureau = alloptionsbureau[i];
                optionbureau.hidden = true;          
          }
          bureauselect.readOnly = true;
                document.getElementById('bureau_ar').value = ' ';
                bureauselectar.readOnly = true;
                document.getElementById('bureau_fr').value = ' ';  
          }
      } else {
        optionservice.hidden = true;
      }
  }
  }else  if(division === "Division des affaires financière et économiques"){
    for (var i = 0; i < alloptionsservice.length; i++) {
      var optionservice = alloptionsservice[i];
      if (optionservice.value === "Service des ressources financières" || optionservice.value === "Service des marchés et du budget"|| optionservice.value === "Service economique de la police administrative et d`hygiene") {
        optionservice.hidden = false;
        if(service === "Service des marchés et du budget"){
            for (var i = 0; i < alloptionsbureau.length; i++) {
              var optionbureau = alloptionsbureau[i];
              if (optionbureau.value === "Bureau des marchés"|| optionbureau.value === "Bureau des budget") {
                optionbureau.hidden = false;
              } else {
                optionbureau.hidden = true;
              }
          }
          }else if(service === "Service economique de la police administrative et d`hygiene"){
            for (var i = 0; i < alloptionsbureau.length; i++) {
              var optionbureau = alloptionsbureau[i];
              if (optionbureau.value === "Bureau economique et sociale"|| optionbureau.value === "Bureau de la police administrative"|| optionbureau.value === "Bureau d`hygiène et de la prévention"|| optionbureau.value === "Burau de la santé vétérinaire") {
                optionbureau.hidden = false;
              } else {
                optionbureau.hidden = true;
              }
          }
          }  else if(service === "Service des ressources financières"){
            for (var i = 0; i < alloptionsbureau.length; i++) {
              var optionbureau = alloptionsbureau[i];
                optionbureau.hidden = true;          
          }
          bureauselect.readOnly = true;
                document.getElementById('bureau_ar').value = ' ';
                bureauselectar.readOnly = true;
                document.getElementById('bureau_fr').value = ' ';  
          }
      } else {
        optionservice.hidden = true;
      }
  }
  }else  if(division === "Direction des services communaux"){
    for (var i = 0; i < alloptionsservice.length; i++) {
      var optionservice = alloptionsservice[i];      
        optionservice.hidden = true;
  }
        serviceselect.readOnly = true;
        document.getElementById('service_fr').value = ' ';
        serviceselectar.readOnly = true;
        document.getElementById('service_ar').value = ' ';
    for (var i = 0; i < alloptionsbureau.length; i++) {
          var optionbureau = alloptionsbureau[i];
          if (optionbureau.value === "Cellule d`audit" || optionbureau.value === "Secrétariat du président"|| optionbureau.value === "Bureau des réclamations"|| optionbureau.value === "Bureau d`ordre") {
            optionbureau.hidden = false;
          } else {
            optionbureau.hidden = true;
          }
      }
  }
  //bureau
  else if(service === "Service de la gestion déléguée des engins du materiel"||service === "Service des ressources humaines et de le formation"||service === "Service des affaires sociales culturelles et sportives"||service === "Service des ressources financières"){
    for (var i = 0; i < alloptionsbureau.length; i++) {
      var optionbureau = alloptionsbureau[i];
        optionbureau.hidden = true;          
  }
  bureauselect.readOnly = true;
        document.getElementById('bureau_ar').value = ' ';
        bureauselectar.readOnly = true;
        document.getElementById('bureau_fr').value = ' ';  
  }
}
function resetserv() {

  document.getElementById('service_fr').selectedIndex = 0;
  document.getElementById('service_ar').selectedIndex = 0;

  document.getElementById('bureau_fr').selectedIndex = 0;
  document.getElementById('bureau_ar').selectedIndex = 0;
}
function resetbur() {

    document.getElementById('bureau_fr').selectedIndex = 0;
    document.getElementById('bureau_ar').selectedIndex = 0;
  }
document.getElementById('division_fr').addEventListener('change', function() {
    resetserv();
  updateservice();
});
document.getElementById('service_fr').addEventListener('change', function() {
    resetbur();
  updateservice();
});


      // Add event listeners to input fields to call indicegen function when input changes
      document.getElementById('service_fr').addEventListener('change', updateservice);
      document.getElementById('bureau_fr').addEventListener('change', updateservice);
 //Shynchronizing two selects
 const gradefr = document.getElementById('grade_fr');
const gradear = document.getElementById('grade_ar');
const bureaufr = document.getElementById('bureau_fr');
const bureauar = document.getElementById('bureau_ar');
const servicefr = document.getElementById('service_fr');
const servicear = document.getElementById('service_ar');
const divisionfr = document.getElementById('division_fr');
const divisionar = document.getElementById('division_ar');

// Mapping between French and Arabic  names
const optionMapping = {
    "administrateur 1er grade": "متصرف من الدرجة الاولى",
    "administrateur 2eme grade": "متصرف من الدرجة التانية",
    "administrateur 3eme grade": "متصرف من الدرجة التالتة",
    "administrateur mi": "متصرف",
    "administrateur principal mi": "متصرف ممتاز",
    "administrateur adjoint mi": "متصرف مساعد",
    "ingenieur en chef": "مهندس رئيس",
    "ingenieur etat": "مهندس دولة",
    "architecte chef": "مهندس معماري رئيس",
    "architecte": "مهندس معماري",
    "medecin": "طبيب",
    "veterinaire": "طبيب بيطري",
    "redacteur 1er grade": "محرر من الدرجة الأولى",
    "redacteur 2eme grade": "محرر من الدرجة التانية",
    "redacteur 3eme grade": "محرر من الدرجة التالتة",
    "redacteur 4eme grade": "محرر من الدرجة الرابعة",
    "adjoint technique grade principal": "مساعد تقني من الدرجة الممتازة",
    "adjoint technique 1er grade": "مساعد تقني من الدرجة الاولى",
    "adjoint technique 2eme grade": "مساعد تقني من الدرجة التانية",
    "adjoint administratif grade principal": "مساعد إداري من الدرجة الممتازة",
    "adjoint administratif 1er grade": "مساعد إداري من الدرجة الاولى",
    "adjoint administratif 2eme grade": "مساعد إداري من الدرجة التانية",
    "infirmier grade principal": "ممرض من الدرجة الممتازة",
    "infirmier grade exceptionnel": "ممرض من الدرجة الستتنإية",
    "infirmier 1er grade": "ممرض من الدرجة الاولى",
    "technicien 1er grade": "تقني من الدرجة الأولى",
    "technicien 2eme grade": "تقني من الدرجة التانية",
    "technicien 3eme grade": "تقني من الدرجة التالتة",
    "technicien 4eme grade": "تقني من الدرجة الرابعة",
  //Bureau
  "Bureau des traveaux": "مكتب الأشغال",
  "Bureau de l`éclarage public": "مكتب الإنارة العمومية",
  "Bureau des éspace verts et de la protection de l`environement": "مكتب المناطق الخضراء والمحافظة على البيئة",
  "Bureau du gichet unique des autorisations et du control du batiment": "مكتب الشباك الوحيد والرخص ومراقبة البناء",
  "Bureau du patrimoine": "مكتب الممتلكات",
  "Bureau des affaires juridiques": "مكتب الشؤون القانونية",
  "Bureau de l`informatique": "مكتب المعلوميات",
  "Bureau des affaires du conseil": "مكتب شؤون المجلس",
  "Bureau d`état civil de la legalisation de signature et ses annexes": "مكتب الحالة المدنية وتصحيح و الإمضاء وملحقاته",
  "Bureau des marchés": "مكتب الصفقات",
  "Bureau des budget": "مكتب الميزانية",
  "Bureau economique et sociale": "المكتب الإقتصادي والإجتماعي",
  "Bureau de la police administrative": "مكتب الشرطة الإدارية",
  "Bureau d`hygiène et de la prévention": "مكتب حفظ الصحة والوقاية",
  "Burau de la santé vétérinaire": "مكتب الصحة البيطرية",
  "Cellule d`audit": "خلية الإفتحاص",
  "Secrétariat du président": "الكتابة الخاصة للرئيس",
  "Bureau des réclamations":"مكتب الشكايات",
  "Bureau d`ordre":"مكتب الضبط",
  //service
  "Service des travaux et de la protection de l`environement": "مصلحة الأشغال والمحافظة على البيئة",
  "Service d`urbanisme et du patrimoine": "مصلحة التعمير والممتلكات",
  "Service de la gestion déléguée des engins du materiel": "مصلحة التدبير المفوض والأليات المعتاد",
  "Service des ressources humaines et de le formation": "مصلحة الموارد البشرية والتكوين",
  "Service des affaires juridiques de l`informatique et des affaires du conseil": "مصلحة الشؤون القانونية والمعلوميات وشؤون المجلس",
  "Service des affaires sociales culturelles et sportives": "مصلحة الشؤون الاجتماعية والثقافية والرياضية",
  "Service des ressources financières": "مصلحة الموارد المالية",
  "Service des marchés et du budget": "مصلحة الصفقات والميزانية",
  "Service economique de la police administrative et d`hygiene": "المصلحة الاقتصادية والشرطة الادارية و حفظ الصحة",
  //Division
  "Division des affaires techniques et d`urbanisme": "قسم الشؤون التقنية والتعمير",
  "Division des affaires administratives": "قسم الشؤون الادارية",
  "Division des affaires financière et économiques": "قسم الشؤون المالية والاقتصادية",
  "Direction des services communaux":"مديرية المصالح الجماعية"
};

gradefr.addEventListener('change', function() {
  const selectedFrenchOption = this.value;
  const correspondingArabicOption = optionMapping[selectedFrenchOption];
  if (correspondingArabicOption) {
      gradear.value = correspondingArabicOption;
 

  } else {
      gradear.value = '';
      
  }
});
divisionfr.addEventListener('change', function() {
  const selectedFrenchOption = this.value;
  const correspondingArabicOption = optionMapping[selectedFrenchOption];

  if (correspondingArabicOption) {
    divisionar.value = correspondingArabicOption;
      divisionar.readOnly= true;
  } else {
    divisionar.value = '';
  }
});
servicefr.addEventListener('change', function() {
  const selectedFrenchOption = this.value;
  const correspondingArabicOption = optionMapping[selectedFrenchOption];

  if (correspondingArabicOption) {
    servicear.value = correspondingArabicOption;
      servicear.readOnly= true;
  } else {
    servicear.value = '';
  }
});
bureaufr.addEventListener('change', function() {
  const selectedFrenchOption = this.value;
  const correspondingArabicOption = optionMapping[selectedFrenchOption];

  if (correspondingArabicOption) {
      bureauar.value = correspondingArabicOption;
      bureauar.readOnly= true;
  } else {
      bureauar.value = '';
  }
});









function validateForm() {
    // Get all input elements
    var inputs = document.querySelectorAll("input[required], textarea[required], select[required]");
    var valid = true;
    
    // Loop through each input element
    inputs.forEach(function(input) {
        // Check if the input value is empty
        if (input.value.trim() === "") {
            // Mark the form as invalid
            valid = false;
            // Add an error message (you can customize the styling)
            input.nextElementSibling.textContent = "This field is required";
            input.nextElementSibling.style.color = "red";
        } else {
            // Clear the error message if the field is valid
            input.nextElementSibling.textContent = "";
        }
    });

    // Return the validity status
    return valid;
}




































































