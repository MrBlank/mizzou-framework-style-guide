/**
 * Enables "Show/Hide Source" Buttons
 *
 * @author Josh Hughes (hughesjd@missouri.edu), Undergraduate Studies, University of Missouri
 * @copyright 2015 Curators of the University of Missouri
 */

// Class manipulation
var objClassManipulation = new ClassManipulation();

// Template for 'Show Source' link
var objSourceTemplate = document.createElement('a');
objSourceTemplate.href = '#';
objSourceTemplate.appendChild(document.createTextNode('+ Show Source'));
objClassManipulation.addClass(objSourceTemplate, 'button source-code-button');
objClassManipulation.addClass(objSourceTemplate, 'source-code-button--show-source');

/**
 * Toggle visibility of source blocks
 *
 * @param object objEvent Event
 */
function toggleSource(objEvent)
{
    objEvent.preventDefault();
    var objSourceBlock = domTraversal('next', domTraversal('parent', this), 'div');
    if (objClassManipulation.hasClass(objSourceBlock, 'source-code--hide')) {
        objClassManipulation.removeClass(objSourceBlock, 'source-code--hide');
        this.removeChild(this.firstChild);
        this.appendChild(document.createTextNode('- Hide Source'));
        objClassManipulation.removeClass(this, 'source-code-button--show-source');
        objClassManipulation.addClass(this, 'source-code-button--hide-source');
    } else {
        objClassManipulation.addClass(objSourceBlock, 'source-code--hide');
        this.removeChild(this.firstChild);
        this.appendChild(document.createTextNode('+ Show Source'));
        objClassManipulation.addClass(this, 'source-code-button--show-source');
        objClassManipulation.removeClass(this, 'source-code-button--hide-source');
    }
}

/**
 * Setup Show/Hide Source Links
 */
function setupShowHideSource() {
    if (document.querySelectorAll) {
        
        // Select all the source blocks
        var objSourceCodeBlocks = document.querySelectorAll('.source-code');
        if (objSourceCodeBlocks.length > 0) {
            for (var i = 0; i < objSourceCodeBlocks.length; i++) {
                if (!objClassManipulation.hasClass(objSourceCodeBlocks[i], 'source-code--no-toggle')) {
                    objClassManipulation.addClass(objSourceCodeBlocks[i], 'source-code--hide');
                    var objShowSourceButton = objSourceTemplate.cloneNode(true);
                    objShowSourceButton.onclick = toggleSource;
                    var objSourceButtonWrapper = document.createElement('p');
                    objSourceButtonWrapper.appendChild(objShowSourceButton);
                    objSourceCodeBlocks[i].parentNode.insertBefore(objSourceButtonWrapper, objSourceCodeBlocks[i]);
                }
            }
        }
    }
}