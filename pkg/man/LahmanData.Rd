\name{LahmanData}
\alias{LahmanData}
\docType{data}
\title{
Lahman Datasets
}
\description{
This dataset gives a consise description of the data files in the Lahman package.
It may be useful for computing on the various files.
}
\usage{data(LahmanData)}
\format{
  A data frame with 27 observations on the following 5 variables.
  \describe{
    \item{\code{file}}{name of dataset}
    \item{\code{class}}{class of dataset}
    \item{\code{nobs}}{number of observations}
    \item{\code{nvar}}{number of variables}
    \item{\code{title}}{dataset title}
  }
}
\details{
This dataset is generated using \code{vcdExtra::datasets(package="Lahman")}
with some post-processing.
}
%\source{
%%%  ~~ reference to a publication or URL from which the data were obtained ~~
%}
%\references{
%%%  ~~ possibly secondary sources and usages ~~
%}
\examples{
data(LahmanData)
\dontrun{
# find ID variables in the datasets
IDvars <- lapply(LahmanData[,"file"], function(x) grep('.*ID$', colnames(get(x)), value=TRUE))
names(IDvars) <- LahmanData[,"file"]
IDvars

# which datasets have playerID?
names(which(sapply(IDvars, function(x) "playerID" \%in\% x)))
}
}
\keyword{datasets}
