# Contributing

----

Want to make a change, found a bug or add a new feature?

Contributions are very welcome, thank you.

Please be **aware**, that to make development easier for all involved,
there is a  [here][].

Any contributions which do not follow the established practices,
may be liable for removal upon review.

When contributing, the following instructions are provided as the *fastest* way to **merge a pull request**.

Please feel free to include workflows for any alternate approaches for other systems/tool chains.

1. ### Open console
    As always, start by opening a console in administrative mode (on Windows),
    then navigating to the desired directory for holding the entire project
    
    ```
    cd C:\projects\php\px
    ```
    
2. ### Create a *remote* branch
    To track the base vigilance91/px repository,
    Execute the command:
    
    ```
    git remote add base git://github.com/vigilance91/px.git
    ```

    Here **base** is the name of the remote.
    
    In this example **_remote** will be the remote repository
    
    This is a convenience to make it easier to update the ```<tracking>``` branch
    
    The directory structure should look similar to this
    
    ```
    \px
        \_remote
            
    ```

3. ### Create a *tracking* branch
    For a base repository, called the ```<tracking>``` branch.
    
    This branch will only ever be updated by pulling from the 'base' remote (opposed to 'origin') branch.

    ```
    git branch --track pullpost base/master
    git checkout pullpost
    ```
    
    **pullpost** will be the same name as the branch.
    
    The name should follow the studios developer's best practices recommendations on naming conventions,
    however, simply naming the branch **tracking** is sufficient for most use cases.
    
    The directory structure should look similar to this
    
    ```
    \px
        \_remote
            
        \tracking
            
    ```

4. ### Create a *change* branch
    Once the ```<tracking>``` branch, has been created and is up to date,
    then create a sibling branch to hold the changes.

    ```
    git branch fixForIssue178
    git checkout fixForIssue178
    ```
    
    Where **fixForIssue178** is the name of the specific branch for making the desired changes.
    
    Note, the name should be descriptive of the issue being addressed,
    following the studio's developer's best practices recommendations on naming conventions.
    
    This will be the ```<change>``` branch.
    
    This is the branch that **pull** requests will be issued from.
    
    Following these steps makes sure that **merge** requests
    have a concise methodology that only involves changes related to a specific fix or feature.
    
    The directory structure should look similar to this
    
    ```
    \px
        \_remote
            
        \tracking
            
        \fixForIssue178
        
    ```

5. ### Making changes
    In the *change* branch make any changes relevant to the fix/feature.
    
    **Don't** group fixes for multiple **unrelated** issues or features together.

    Please, create a separate branch for each unrelated change.

6. ### Testing
    Ensure to include *unit tests*, with **documentation**, regarding any changes.
   
    **Submitting a bug fix**? Include appropriate tests that verify the existence of the bug, including the solution.
   
    **Feature submition**? Include all tests that verify functionality.

    See README.md in the **test** directory for more information

7. ### Commit and publish
    After completing thorough testing commit all changes then,
    publish the branch or push it if has already been published
    
    ```
    git commit
    ```

8. ### Issue a *pull* request
   On [Github][https://github.com], switch to ```<change>``` branch then click the 'Pull Request' button.
   
   Enter meaningful information about the specific pull request.
   
   **bug fixes** which don't already have an associated issue,
   provide details on what conditions the bug occurs in with a sense of severity.
   
   If there is already an issue, include the hash and issue number (e.g. '#100') so Github will link it.

   **Features** should provide the context regarding the motivation behind it,
   why it's important/useful/cool/necessary and what it does/how to use it.
   
   Make sure to include all necessary details.
   
   Documentation makes everything easier when intent is explicitly stated.
   
