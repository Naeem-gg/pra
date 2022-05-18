#include <stdio.h>
int main()
{
    int m, n, i, j, all[10][10], max[10][10], av[10], inst[10];
    signed need[10][10];
    char a[] = {'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'};

    printf("\n\n=====================================================\n\n");
    printf(" Enter The No. Of Processes :=> ");
    scanf("%d", &m);
    printf(" Enter The No. Of Resources :=> ");
    scanf("%d", &n);
    printf("\n");
    for (i = 0; i < n; i++)
    {
        printf(" Enter The Instances Of Resource \" %c \" :=> ", a[i]);
        scanf("%d", &inst[i]);
    }
    printf("\n=====================================================\n\n");
    printf(" Enter The Allocation Matrix :=>\n\n");
    printf("\t    ");
    for (i = 0; i < n; i++)
        printf(" %c", a[i]);
    printf("\n");
    for (i = 0; i < m; i++)
    {
        printf("\n\tP%d | ", i);
        for (j = 0; j < n; j++)
            scanf("%d", &all[i][j]);
    }
    printf("\n\n=====================================================\n\n");
    printf(" Enter The Maximum Matrix :=>\n\n");
    printf("\t    ");
    for (i = 0; i < n; i++)
        printf(" %c", a[i]);
    printf("\n");
    for (i = 0; i < m; i++)
    {
        printf("\n\tP%d | ", i);
        for (j = 0; j < n; j++)
            scanf("%d", &max[i][j]);
    }
    printf("\n\n=====================================================\n\n");
    for (i = 0; i < n; i++)
    {
        av[i] = 0;
        for (j = 0; j < m; j++)
        {
            av[i] = av[i] + all[j][i];
        }
        av[i] = inst[i] - av[i];
    }
    printf(" Available Resource Matrix Is :=>\n\n");
    printf("\tAVAILABLE = INSTANCE[i] - ( ALLOCATION[j][i] )\n\n");
    for (i = 0; i < n; i++)
        printf("\t%c", a[i]);
    printf("\n\n");
    for (i = 0; i < n; i++)
        printf("\t%d", av[i]);
    printf("\n\n=====================================================\n\n");

    for (i = 0; i < m; i++)
        for (j = 0; j < n; j++)
            need[i][j] = max[i][j] - all[i][j];
    printf("Need Matrix Is :=>\n\n");
    printf("\tNEED[i][j] = MAXIMUM[i][j] - ALLOCATION[i][j]");
    printf("\n\n\t     ");
    for (i = 0; i < n; i++)
        printf(" %c ", a[i]);
    for (i = 0; i < m; i++)
    {
        printf("\n\n\tP%d | ", i);
        for (j = 0; j < n; j++)
            printf(" %d ", need[i][j]);
    }
    printf("\n\n=====================================================\n\n");

    printf("   TO CHECK WHETHERE THE GIVIN SYSTEM IS IN SAFE STATE\n\n");
    printf("   OR NOT..... USE SAFETY ALGORITHM AS BELLOW.....");
    printf("\n\n=====================================================\n\n");
    int work[10], safe[10], flag, k = 0;
    char finish[10];
    printf("\tNow Initialisation For Work And Finish Is :=>\n\n");
    printf("\t\twork[] = (");
    for (i = 0; i < n; i++)
    {
        work[i] = av[i];
        printf("  %d  ", work[i]);
    }
    printf("}\n\n\n\t\tfinish[] = {");
    for (i = 0; i < m; i++)
    {
        finish[i] = 'F';
        printf("  %c  ", finish[i]);
    }
    printf("}");
    printf("\n\n=====================================================\n\n");
    int x = 0, cnt = 0, wait = 0;
BRC:
    for (i = x; i < m; i++)
    {

        printf("\n\n=====================================================\n\n");
        if (finish[i] != 'T')
        {
            if (wait == 1)
            {
                printf("\t\tNow Consider Waiting Process i.e. P%d\n", i);
            }
            flag = 0;
            printf("\n\tLet i = %d  ( For Process P%d )\n\n", (i + 1), i);
            printf("\tfinish[P%d] = %c", i, finish[i]);
            printf("\n\n\tLet's Check The Condition...\n");
            printf("\t\tIs... need[P%d]  < =  work[]\n", i);
            printf("\t\ti.e.  (");
            for (j = 0; j < n; j++)
                printf(" %d ", need[i][j]);
            printf(")  < =  (");
            for (j = 0; j < n; j++)
                printf(" %d ", work[j]);
            printf(")");
            for (j = 0; j < n; j++)
            {
                if (need[i][j] > work[j])
                {
                    flag = 1;
                    break;
                }
            }
            if (flag == 0)
            {
                finish[i] = 'T';
                safe[k] = i;
                k++;
                printf("\n\tCondition Is True\n");
                printf("\tProcess P%d Will Grant The Resources", i);
                printf("\n\n\tNow work[] = work[] + allocation[P%d]\n", i);
                printf("\t    work[] = (");
                for (j = 0; j < n; j++)
                    printf(" %d ", work[j]);
                printf(") + (");
                for (j = 0; j < n; j++)
                    printf(" %d ", all[i][j]);
                printf(")\n\t    work[] = (");
                for (j = 0; j < n; j++)
                {
                    work[j] = work[j] + all[i][j];
                    printf(" %d ", work[j]);
                }
                printf(")\n\n");
                printf("\tThe Safe Sequence Is :=> {");
                for (j = 0; j < k; j++)
                    printf(" P%d ", safe[j]);
                printf("}");
            }
            else
            {
                printf("\n\tCondition Is False\n");
                printf("\n\tProcess P%d Will Not Grant The Resources", i);
                printf("\n\tProcess P%d Will Wait For The Resources", i);
            }
            printf("\n\n\tNow finish[] = {");
            for (j = 0; j < m; j++)
                printf(" %c ", finish[j]);
            printf("}\n");
            printf("\n=====================================================");
        }
    }
    cnt++;
    if (cnt < 2)
    {
        for (i = 0; i < m; i++)
        {
            if (finish[i] != 'T')
            {
                x = i;
                wait = 1;
                goto BRC;
            }
        }
    }
    flag = 0;
    for (i = 0; i < m; i++)
    {
        if (finish[i] != 'T')
        {
            flag = 1;
            break;
        }
    }
    if (flag == 0)
        printf("\t\t...GIVEN SYSTEM IS IN SAFE STATE...\n");
    else
        printf("\t\t...GIVEN SYSTEM IS NOT IN SAFE STATE...\n");
    printf("\n=====================================================");

    return (0);
}
