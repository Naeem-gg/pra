#include <stdio.h>
#include <malloc.h>
#include <math.h>
#include <string.h>
#define SIZE 100
struct direntry
{
    char fname[15];
    int start, len;
    struct direntry *next;
} *start = NULL, *end = NULL;
int bitvector[SIZE];
int main()
{
    int ch1 = 0, i, j, n;
    struct direntry *t1, *t2;
    char fname[15];
    for (i = 0; i < SIZE; i++)
        bitvector[i] = 1;
    while (ch1 != 5)
    {
        printf("\n1. Allocate file ");
        printf("\n2. Show direntry");
        printf("\n3. Deallocate file");
        printf("\n4. Show free and used space ");
        printf("\n5. Exit");
        printf("\n\n--------------------------");
        printf("\n Enter your choice: ");
        scanf("%d", &ch1);
        switch (ch1)
        {
        case 1:
            t1 = (struct direntry *)malloc(sizeof(struct direntry));
            t1->next = NULL;
            // printf("\n Enter a filename: ");
            // scanf("%s",t1->fname);
            if (start == NULL)
                start = end = t1;
            else
            {
                end->next = t1;
                end = t1;
            }
            printf("\n Enter a filename: ");
            scanf("%s", t1->fname);
            printf("\n Enter the no of blocks: ");
            scanf("%d", &n);
            i = 0;
            while (bitvector[i] != 1)
                i++;
            t1->start = j = i;
            i++;
            n--;
            while (n > 0)
            {
                if (bitvector[i] == 1)
                {
                    bitvector[j] = i;
                    j = i;
                    n--;
                    t1->len = i;
                    bitvector[i] = 0;
                }
                i++;
            }
            break;
        case 2:
            printf("\n Directory :");
            printf("\n----------------\n");
printf("File Name Start Count\n");
printf("---------------------------\n");
for(t1!=start;t1!=NULL;t1=t1->next)
printf("\n%-15s %5d %5d",t1->fname,t1->start,t1->len);
printf("\n----------------------------------");
break;
case 3: printf("\n Enter file name to be delete :");
scanf("%s",fname);//gets(fname);
for(t1=start;t1!=NULL;t2=t1,t1=t1->next)
{
                if (strcmp(t1->fname, fname) == 0)
                    break;
}
if(t1=start)
start=start->next;
else
t2->next=t1->next;
i=t1->start;
while(i!=t1->len)
{
                j = bitvector[i];
                bitvector[i] = 1;
                i = j;
}
bitvector[i]=1;
if(start!=NULL)
end=NULL;
if(t1==end)
end=t2;
free(t1);
break;
case 4:
printf("\n Bit Vector ");
for(i=0;i<SIZE;i++)
printf("%4d",bitvector[i]);
        }
    }
}